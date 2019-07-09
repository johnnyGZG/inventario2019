<?php

use Illuminate\Database\Seeder;

use App\EstadoProducto;

class EstadosProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoProducto::truncate();

        $estadoProducto = new EstadoProducto;
    	$estadoProducto->estado = "Disponible";
        $estadoProducto->save();
        
        $estadoProducto = new EstadoProducto;
    	$estadoProducto->estado = "Agotado";
        $estadoProducto->save();
        
        $estadoProducto = new EstadoProducto;
    	$estadoProducto->estado = "Vencido";
        $estadoProducto->save();
        
        $estadoProducto = new EstadoProducto;
    	$estadoProducto->estado = "Pocos Disponibles";
    	$estadoProducto->save();
    }
}
