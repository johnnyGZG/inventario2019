<?php

namespace App;

use App\producto;
use App\estado_inventario;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
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
        return $this->belongsTo(producto::class,'producto_id','id');
    }

    public function estadoInventario()
    {
        return $this->hasOne(estado_inventario::class,'estado_inventario_id','id');
    }
}
