@extends('dashboard.master')
@section('Titulo','Mensaje')
@include('layouts/navigation')
@section('contenido')
<h1>Mensaje</h1>
<div class="container py-4">
    <h2>{{$msg}}</h2>
    <a href="{{url('dashboard/Category')}}"class="btn btn-secuondary">Regresar</a>
</div>
@endsection
