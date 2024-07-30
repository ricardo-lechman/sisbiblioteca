@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1>Detalle del Libro</h1>
    
    @if($libro)
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $libro->Cod_Libro }}</td>
            </tr>
            <tr>
                <th>Título</th>
                <td>{{ $libro->Titulo }}</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>{{ $libro->Autor }}</td>
            </tr>
            <tr>
                <th>Editorial</th>
                <td>{{ $libro->Editorial }}</td>
            </tr>
            <tr>
                <th>Edición</th>
                <td>{{ $libro->Edicion }}</td>
            </tr>
            <tr>
                <th>Idioma</th>
                <td>{{ $libro->Idioma }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $libro->Estado }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ $libro->Descripcion }}</td>
            </tr>
            <tr>
                <th>Cantidad de Páginas</th>
                <td>{{ $libro->CantPaginas }}</td>
            </tr>
            <tr>
                <th>Copias Disponibles</th>
                <td>{{ $libro->CopiasDisp }}</td>
            </tr>
        </table>
    @else
        <p>No se encontró el libro.</p>
    @endif

    <a href="{{ route('libros.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop
