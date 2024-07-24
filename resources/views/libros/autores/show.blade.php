@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Autor</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $autor->Cod_Autor }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $autor->NombreAutor }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $autor->Descripcion }}</td>
        </tr>
    </table>
    <a href="{{ route('autores.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
