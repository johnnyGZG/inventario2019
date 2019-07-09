<?php

namespace App;

use App\estado_producto;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

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
        return $this->hasOne(estado_producto::class,'estado_producto_id','id');
    }
}
