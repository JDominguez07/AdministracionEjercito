@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Cuartel</h2>
    <form action="{{ route('barracks.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
