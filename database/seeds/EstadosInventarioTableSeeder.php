<?php

use Illuminate\Database\Seeder;

use App\EstadoInventario;

class EstadosInventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoInventario::truncate();

        $estadoInventario = new EstadoInventario;
    	$estadoInventario->estado = "Transacción Completa";
        $estadoInventario->save();

        $estadoInventario = new EstadoInventario;
    	$estadoInventario->estado = "Cancelado";
        $estadoInventario->save();

        $estadoInventario = new EstadoInventario;
    	$estadoInventario->estado = "Pendiente";
        $estadoInventario->save();
    }
}
