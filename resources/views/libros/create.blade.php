@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1>Crear Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Titulo">Título</label>
            <input type="text" name="Titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="Autor">Autor</label>
            <input type="text" name="Autor" class="form-control">
        </div>
        <div class="form-group">
            <label for="Editorial">Editorial</label>
            <input type="text" name="Editorial" class="form-control">
        </div>
        <div class="form-group">
            <label for="Edicion">Edición</label>
            <input type="date" name="Edicion" class="form-control">
        </div>
        <div class="form-group">
            <label for="Idioma">Idioma</label>
            <input type="text" name="Idioma" class="form-control">
        </div>
        <div class="form-group">
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" class="form-control">
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea name="Descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="CantPaginas">Cantidad de Páginas</label>
            <input type="number" name="CantPaginas" class="form-control">
        </div>
        <div class="form-group">
            <label for="CopiasDisp">Copias Disponibles</label>
            <input type="number" name="CopiasDisp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
   
@stop
