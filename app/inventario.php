<?php

namespace App;

use App\Producto;
use App\EstadoInventario;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id',
        'cliente_id',
        'estado_inventario_id',
        'cantidad',
        'total'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id','id');
    }

    public function estadoInventario()
    {
        return $this->hasOne(EstadoInventario::class,'estado_inventario_id','id');
    }
}
