@extends('template')

@section('content')


<form method="POST" action="{{ route('update', $personaje->id) }}">
    @csrf
    @method('PUT')

    
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $personaje->nombre }}">
    </div>

    <div>
        <label for="especie">Especie:</label>
        <input type="text" id="especie" name="especie" value="{{ $personaje->especie }}">
    </div>

    <div>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" value="{{ $personaje->estado }}">
    </div>

    <button type="submit">Guardar cambios</button>
</form>


@endsection