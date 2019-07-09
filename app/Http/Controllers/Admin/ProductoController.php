<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Producto;
use App\EstadoProducto;

class ProductoController extends Controller
{
    public function create()
    {
        return view('admin.productos.producto', [
        	'opc_estado' => EstadoProducto::pluck('estado','id')
        ]);
    }

    public function store(Request $request)
    {
    	$input = $request->input();
    	$now=Carbon::now()->toDateTimeString();

    	$input['created_at'] = $now;
    	$input['updated_at'] = $now;


    	$producto = Producto::create($input);

    	if($producto == null)
    	{
    		return redirect()->route('admin.productos.create')->with('error', 'Error guardando datos del producto');
    	}

        return redirect()->route('dashboard')->with('success', 'Datos del producto guardados');
    }
}