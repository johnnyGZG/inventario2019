<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_producto extends Model
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
