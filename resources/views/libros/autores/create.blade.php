@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NombreAutor">Nombre del Autor</label>
            <input type="text" name="NombreAutor" class="form-control">
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea name="Descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
