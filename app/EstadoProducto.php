<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoProducto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estados_producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado'
    ];
}
