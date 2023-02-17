


    <h1>Personajes</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Estado</th>
                <th>Fecha de creación</th>
                <th>Última actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personajes as $personaje)
                <tr>
                    <td>{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->especie }}</td>
                    <td>{{ $personaje->estado }}</td>
                    <td>{{ $personaje->created_at }}</td>
                    <td>{{ $personaje->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

