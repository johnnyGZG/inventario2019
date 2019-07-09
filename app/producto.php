<?php

namespace App;

use App\EstadoProducto;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    protected $dates = ['vencimiento'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_producto',
        'cantidad',
        'num_lote',
        'vencimiento',
        'precio',
        'estado_producto_id'
    ];

    public function estadoProductio()
    {
        return $this->hasOne(EstadoProducto::class,'id','estado_producto_id');
    }
}
