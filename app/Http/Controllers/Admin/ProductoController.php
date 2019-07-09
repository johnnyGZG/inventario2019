<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\producto;

class ProductoController extends Controller
{
    public function create()
    {
        return view('admin.productos.producto');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}