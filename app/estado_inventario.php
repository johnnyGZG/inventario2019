<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_inventario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estados_inventario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado'
    ];
}
