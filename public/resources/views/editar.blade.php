@extends('template')

@section('content')

<form action="{{ route('personajes.update', ['id' => $personaje->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- otros campos del formulario -->
    <button type="submit">Actualizar</button>
</form>

@endsection