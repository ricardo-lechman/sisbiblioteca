@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Alumno</h1>
    <table class="table">
        <tr>
            <th>DNI</th>
            <td>{{ $alumno->Dni_Alumno }}</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>{{ $alumno->User }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $alumno->Email }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $alumno->Direccion }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $alumno->Telefono }}</td>
        </tr>
    </table>
    <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
