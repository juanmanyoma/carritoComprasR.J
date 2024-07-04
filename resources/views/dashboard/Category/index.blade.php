@extends('dashboard.master')
@section('Titulo','Categorias')
@include('layouts.navigation')
@section('contenido')
<main>
    <div>
   <h1>listado de Categorias</h1>
   <br>
   <a href="{{url('dashboard/Category/create')}}" class="btn btn-outline-danger">Nueva Categoria</a>
    </div>
    <table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>Id caterogtia </th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Category as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
            <td>{{ $category->state ? __('activo') : __('inactivo') }}</td>
            <td><a href="{{url('dashboard/Category/'.$category->id.'/edit')}}" class="bi bi-pencil"></a></td>
            <td>
            <form action="{{url('dashboard/Category/'.$category->id )}}" method="post">
             @method ('DELETE')
             @csrf
                <button class="bi bi-eraser-fill" type="submit"></button>
            </form>
            </td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</main>
