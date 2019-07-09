@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            Productos
                        </div>
                        <div class="col-2">
                            <a class="btn btn-success" href="{{ route('admin.productos.create') }}" role="button">
                                + Nuevo
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Fecha Vencimiento</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <th scope="row">{{ $producto->id }}</th>
                                    <td>{{ $producto->nom_producto }}</td>
                                    <td>{{ $producto->cantidad }}</td>
                                    <td>{{ $producto->vencimiento->format('Y-m-d') }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection