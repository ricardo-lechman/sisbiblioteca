@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Estado</h1>
    <form action="{{ route('estados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Disponibilidad">Disponibilidad</label>
            <input type="text" name="Disponibilidad" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
