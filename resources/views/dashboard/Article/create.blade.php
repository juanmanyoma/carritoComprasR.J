@extends('dashboard.master')

@section('Titulo', 'Nuevo Artículo')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('Article.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa el código del producto">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa el Nombre del producto">
            </div>
        </div>

        <div class="form-group row">
            <label for="caregory" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <select name="caregory" id="caregory" class="form-select" required>
                    @foreach ($caregory as $caregory)
                    <option value="{{$caregory->id}}">{{$caregory->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="sale_price" class="col-sm-2 col-form-label">Precio De Venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sale_price" id="sale_price" placeholder="Ingresa el Precio De Venta">
            </div>
        </div>

        <div class="form-group row">
            <label for="sale_price" class="col-sm-2 col-form-label">Cantidad Disponible (stock)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock" placeholder="Ingresa la Cantidad Disponible">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="description" placeholder="Ingresa la Descripción">
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{ url('dashboard/article') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
