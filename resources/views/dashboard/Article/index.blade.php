@extends('dashboard.master')
@section('Titulo','Acticulos')
@include('layouts/navigation')
@section('contenido')
<div class="contayner py-4">
    <h1>Listado de Acticulos</h1>
    <br>
    <a href="{{url('dashboard/Article/create')}}" class="btn btn-primary btn-sm">Nuevo articulo</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id producto</th>
                <th>Codico</th>
                <th>Nombre</th>
                <th>Precio De venta </th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Eestado</th>
                <th>Categoria</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $article)
            <tr>
                <td scope="row">{{$article->id}}</td>
                <td>{{$article->code}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->sale_price}}</td>
                <td>{{$article->stock}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->state ? __('activo') : __('inactivo')}}</td>
                <td>{{$article->Category->name}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>
                <td>
                    <td><a href="{{url('dashboard/article/'.$article->id.'/edit')}}" class="bi bi-pencil"></a></td>
                </td>
                <td>
                    <form action="{{url('dashboard/article/'.$article->id )}}" method="post">
                     @method ('DELETE')
                     @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            <tr>
                <tds scope="row"></tds>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

