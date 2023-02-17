@extends('template')

@section('content')


<form method="POST" action="{{ route('update', $personaje->id) }}">
    @csrf
    @method('PUT')

    <div class="text-center">
        <img src="{{  $personaje->image }}" class="rounded">
    </div>

    
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $personaje->name }}">
    </div>

    <div>
        <label for="especie">status:</label>
        <input type="text" id="status" name="status" value="{{ $personaje->status }}">
    </div>

    <div>
        <label for="estado">species:</label>
        <input type="text" id="species" name="species" value="{{ $personaje->species }}">
    </div>
    <div>
        <label for="estado">gender:</label>
        <input type="text" id="gender" name="gender" value="{{ $personaje->gender }}">
    </div>
    <div>
        <label for="estado">origin:</label>
        <input type="text" id="origin" name="origin" value="{{ $personaje->origin }}">
    </div>
    <div>
        <label for="estado">location:</label>
        <input type="text" id="location" name="location" value="{{ $personaje->location }}">
    </div>
    <div>
        <label for="estado">url:</label>
        <input type="text" id="url" name="url" value="{{ $personaje->url }}">
    </div>

    <button type="submit">Guardar cambios</button>
</form>


@endsection