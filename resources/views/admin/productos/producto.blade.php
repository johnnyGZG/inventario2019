@extends('layouts.app')

@section('content')

<style>
    label::after
    {
        content: '*';
        color: red;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Nuevo Producto</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('admin.productos.store') }}">

                        @csrf
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nom_producto">Nombre:</label>
                                <input name="nom_producto" type="text" class="form-control" id="nom_producto" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="num_lote">Número de Lote:</label>
                                <input name="num_lote" type="text" class="form-control" id="num_lote" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="vencimiento">Fecha Vencimiento:</label>
                                <input name="vencimiento" type="date" class="form-control" id="vencimiento" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="precio">Precio:</label>
                                <input name="precio" type="number" class="form-control" id="precio" required step="0.01">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad:</label>
                                <input name="cantidad" type="number" class="form-control" id="cantidad" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="estado_producto_id">Estado:</label>
                                <select name="estado_producto_id" class="form-control" id="estado_producto_id" required>
                                    @foreach( $opc_estado as $estadoKey => $estadoValue )
                                        <option value="{{ $estadoKey }}">{{ $estadoValue }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection