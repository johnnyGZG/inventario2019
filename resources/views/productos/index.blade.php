@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {!! session('error') !!}
                </div>
            @elseif(session('warning'))
                <div class="alert alert-warning" role="alert">
                    {!! session('warning') !!}
                </div>
            @endif
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha Vencimiento</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <form method="POST" action="{{ route('producto.store') }}">

                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $producto->nom_producto }}</td>
                                        <td>{{ $producto->vencimiento->format('Y-m-d') }}</td>
                                        <td>$ {{ number_format($producto->precio,0,',','.') }}</td>
                                        <td>
                                            <input type="number" name="cantidad" value="1" required>
                                        </td>
                                        <td>
                                            @if($producto->cantidad > 0 && $producto->estado_producto_id == 1)
                                                <button type="submit" class="btn btn-primary">Comprar</button>
                                            @else
                                                <stron>
                                                    {{ $producto->estadoProductio->estado }}
                                                </stron>
                                            @endif
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
