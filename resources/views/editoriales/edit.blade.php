@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Editorial</h1>
    <form action="{{ route('editoriales.update', $editorial->Cod_editorial) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NombreEditorial">Nombre de la Editorial</label>
            <input type="text" name="NombreEditorial" class="form-control" value="{{ $editorial->NombreEditorial }}">
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea name="Descripcion" class="form-control">{{ $editorial->Descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
