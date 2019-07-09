<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use PDF;

use App\Producto;
use App\EstadoProducto;
use App\Inventario;

class ProductoController extends Controller
{
    public function show()
    {
    	$now = Carbon::now()->format('Y-m-d');
        $now = Carbon::parse($now. ' ' .'00:00:00');

        $productos = Producto::where('vencimiento', '>=', $now)->with('estadoProductio')->get();

        return view('productos.index', [
        	'productos' => $productos,
        	'opc_estado' => EstadoProducto::pluck('estado','id')
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->input();
        $now = Carbon::now()->toDateTimeString();

        $fechaActual = Carbon::now()->format('Y-m-d');
        $fechaActual = Carbon::parse($fechaActual. ' ' .'00:00:00');

        $producto = Producto::where('id', $input['producto_id'])
        						->where('vencimiento', '>=', $fechaActual)
        						->where('estado_producto_id', 1)
        						->first();

        if($producto == null)
        {
        	return redirect()->route('producto.show')->with('error', 'Producto no valido');
        }

        if( ($input['cantidad'] <= 0 ) || ($input['cantidad'] > $producto->cantidad) )
        {
        	return redirect()->route('producto.show')->with('warning', 'La cantidad solicitada no esta disponible');
        }

        $input['total'] = $producto->precio * $input['cantidad'];
        $input['cliente_id'] = 1;
        $input['estado_inventario_id'] = 1;
        $input['created_at'] = $now;
    	$input['updated_at'] = $now;

    	$inventario = Inventario::create($input);

    	if($inventario == null)
    	{
    		return redirect()->route('producto.show')->with('error', 'Error en el proceso de comprar en el producto: ' . $producto->nom_producto);
    	}

    	$producto->cantidad = $producto->cantidad - $input['cantidad'];

    	if($producto->cantidad == 0)
    	{
    		$producto->estado_producto_id = 2;
    	}

    	$producto->save();

    	$pdf = PDF::loadView('productos.factura_pdf', compact('producto', 'inventario') );  
        return $pdf->stream('Factura_orden_'. $producto->id . '-' .$now);

        // return redirect()->route('producto.show')->with('success', 'Transaccion completada con exito');

    }
}