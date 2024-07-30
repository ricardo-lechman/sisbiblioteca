@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Editorial</h1>
    <form action="{{ route('editoriales.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NombreEditorial">Nombre de la Editorial</label>
            <input type="text" name="NombreEditorial" class="form-control">
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea name="Descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
