@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Ejemplar</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $ejemplar->Id_Ejemplar }}</td>
        </tr>
        <tr>
            <th>Número</th>
            <td>{{ $ejemplar->Numero_Ejemplar }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ $ejemplar->Estado_Ejemplar }}</td>
        </tr>
    </table>
    <a href="{{ route('ejemplares.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
