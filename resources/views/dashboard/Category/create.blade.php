@extends('dashboard.master')
@section('Titulo','NuevaCategorias')
@include('layouts/navigation')
@section('contenido')
<divc class="container py-4">
<form action="{{ route('Category.store') }}"method="post">
@csrf
<div class="form-group row">
      <leble for="name"class="col-sm-2 col-form-leble">Nombre</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="name" id="name" placeholder=" Nombre El Categoria">
      </div>
      <div class="form-group row">
      <leble for="description">Descripcion</leble>
      <div class="col-sm-10" >
       <input class="form-control" name="description" id="description"></input>
      </div>
      </div>
      <div class="form-group row">
      <leble for="state">Estado</leble>
      <div class="col-sm-10" >
       <select class="form-control" name="state"id="state" >
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
       </select>
      </div>
      </div>
      <div class="form-group row">
           <div class="col-sm-10 offset-sm-2" >
             <button type="submit"class="btn btn-success">Registrar</button>
             <a href="{{url('dashboard/Category')}}"class="btn btn-secondary">Regresar</a>
      </div>
      </div>
</div>
</form>
</divc>

@endsection
