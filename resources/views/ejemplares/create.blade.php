@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Ejemplar</h1>
    <form action="{{ route('ejemplares.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Numero_Ejemplar">Número del Ejemplar</label>
            <input type="text" name="Numero_Ejemplar" class="form-control">
        </div>
        <div class="form-group">
            <label for="Estado_Ejemplar">Estado del Ejemplar</label>
            <input type="text" name="Estado_Ejemplar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
