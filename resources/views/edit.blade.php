@extends('template')

@section('content')
    <form method="POST" action="{{ route('update', $personaje->id) }}">
        @csrf
        @method('PUT')
        <div style="padding: 2% 20% 2% 20%">

            <h2 class="text-center"> Editar informacion de {{ $personaje['name'] }} </h2>
            <br>
            <div class="text-center">
                <img src="{{ $personaje->image }}" class="rounded">
            </div>

            <br><br>
            <table class="table">
                <tbody >
                    <tr>

                        <td>
                            <label for="nombre">Nombre:</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="name" name="name" value="{{ $personaje->name }}">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="especie">status:</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="status" name="status" value="{{ $personaje->status }}">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="estado">species:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" id="species" name="species" value="{{ $personaje->species }}">
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="estado">gender:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" id="gender" name="gender" value="{{ $personaje->gender }}">
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="estado">origin:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" id="origin" name="origin" value="{{ $personaje->origin }}">
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="estado">location:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" id="location" name="location" value="{{ $personaje->location }}">
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="estado">url:</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" id="url" name="url" value="{{ $personaje->url }}">
                    </td>
                    </tr>
                </tbody>
            </table>
            <br>
            
            <button class="position-absolute start-50 translate-middle btn btn-success" type="submit">Guardar cambios</button>
    </form>
    </div>
@endsection
