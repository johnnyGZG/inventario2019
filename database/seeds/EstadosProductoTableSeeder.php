<?php

use Illuminate\Database\Seeder;

use App\estado_producto;

class EstadosProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estado_producto::truncate();

        $estadoProducto = new estado_producto;
    	$estadoProducto->estado = "Disponible";
        $estadoProducto->save();
        
        $estadoProducto = new estado_producto;
    	$estadoProducto->estado = "Agotado";
        $estadoProducto->save();
        
        $estadoProducto = new estado_producto;
    	$estadoProducto->estado = "Vencido";
        $estadoProducto->save();
        
        $estadoProducto = new estado_producto;
    	$estadoProducto->estado = "Pocos Disponibles";
    	$estadoProducto->save();
    }
}
