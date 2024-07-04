@extends('dashboard.master')
@section('Titulo', 'Persona')
@include('layouts/navigation')
@section('contenido')
<h1>Listado de Personas</h1>
<br>
<a href="{{url('dashboard/Person/create')}}" class="btn btn-outline-danger">Listado De personas</a>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>Id Personas</th>
            <th>Tipo de persona</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo De documento</th>
            <th>Numero De Documento</th>
            <th>Direccion</th>
            <th>Numero De Telefono</th>
            <th>Email</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tbody>
    @foreach($Person as $person)
        <tr>
            <td>{{ $person->id }}</td>
            <td>{{$person->type }}</td>
            <td>{{$person->First_Name }}</td>
            <td>{{$person->Last_Name }}</td>
            <td>{{$person->Document_type }}</td>
            <td>{{$person->Document_Number }}</td>
            <td>{{$person->Adress }}</td>
            <td>{{$person->Phone }}</td>
            <td>{{$person->Email }}</td>
            <td>
                <a href="{{url('dashboard/Person/'.$person->id.'/edit')}}" class="bi bi-pencil"></a>
                <form action="{{url('dashboard/Person/'.$person->id)}}" method="post" style="display:inline">
                    @method('DELETE')
                    @csrf
                    <button class="bi bi-eraser-fill" type="submit"></button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
