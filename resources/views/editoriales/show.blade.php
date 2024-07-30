@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Editorial</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $editorial->Cod_editorial }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $editorial->NombreEditorial }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $editorial->Descripcion }}</td>
        </tr>
    </table>
    <a href="{{ route('editoriales.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
