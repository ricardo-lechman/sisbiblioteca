@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de Control - Préstamos</h1>
@stop

@section('content')
<div class="container">
    <h1>Lista de Préstamos</h1>
    <a href="{{ route('prestamos.create') }}" class="btn btn-primary mb-3">Crear Préstamo</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Libro</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $prestamo)
            <tr>
                <td>{{ $prestamo->Cod_Prestamo }}</td>
                <td>{{ $prestamo->alumno->User ?? 'No disponible' }}</td>
                <td>{{ $prestamo->libro->Titulo ?? 'No disponible' }}</td>
                <td>{{ $prestamo->Fecha_Prestamo }}</td>
                <td>{{ $prestamo->Fecha_Devolucion ?? 'No registrada' }}</td>
                <td>
                    <a href="{{ route('prestamos.show', $prestamo->Cod_Prestamo) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('prestamos.edit', $prestamo->Cod_Prestamo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('prestamos.destroy', $prestamo->Cod_Prestamo) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este préstamo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    {{-- Estilos personalizados opcionales --}}
@stop

@section('js')
    {{-- Scripts personalizados opcionales --}}
@stop
