@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Estado</h1>
    <form action="{{ route('estados.update', $estado->Id_Estado) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Disponibilidad">Disponibilidad</label>
            <input type="text" name="Disponibilidad" class="form-control" value="{{ $estado->Disponibilidad }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
