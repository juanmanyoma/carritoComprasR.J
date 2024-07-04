@extends('dashboard.master')

@section('Titulo', 'Nueva Categoría')

@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <form action="{{ route('Person.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="Persona_Natural" class="col-sm-2 col-form-label">Tipo de persona</label>
            <div class="col-sm-10">
                <select class="form-control" name="Persona_Natural" id="Persona_Natural">
                    <option value="1">Persona natural</option>
                    <option value="2">Persona jurídica</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="numero_documento" class="col-sm-2 col-form-label">Número de Documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="numero_documento" id="numero_documento" placeholder="Número de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo de Documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="tipo_documento" id="tipo_documento">
                    <option value="1">CC</option>
                    <option value="2">TI</option>
                    <option value="3">Pasaporte</option>
                    <option value="4">NIT</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" id="address" placeholder="Dirección de la persona">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{ url('dashboard/Person') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection


