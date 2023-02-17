<form method="POST" action="{{ route('personajes.update', $personaje->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $personaje->name }}">
    </div>
    <div>
        <label for="status">Estatus:</label>
        <input type="text" id="status" name="status" value="{{ $personaje->status }}">
    </div>
    <div>
        <label for="species">Especie:</label>
        <input type="text" id="species" name="species" value="{{ $personaje->species }}">
    </div>
    <div>
        <button type="submit">Guardar cambios</button>
    </div>
</form>
