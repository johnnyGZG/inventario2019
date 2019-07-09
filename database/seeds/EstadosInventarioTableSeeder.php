<?php

use Illuminate\Database\Seeder;

use App\estado_inventario;

class EstadosInventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estado_inventario::truncate();

        $estadoInventario = new estado_inventario;
    	$estadoInventario->estado = "Transacción Completa";
        $estadoInventario->save();

        $estadoInventario = new estado_inventario;
    	$estadoInventario->estado = "Cancelado";
        $estadoInventario->save();

        $estadoInventario = new estado_inventario;
    	$estadoInventario->estado = "Pendiente";
        $estadoInventario->save();
    }
}
