@extends('template')

@section('content')
    <!--cabeza del html-->




    <br>

    <h1 class="text-center">Personajes de Rick and Morty consultados por una API </h1>


    
    <!-- inicio de la tabla consulta a la api -->
    <div style="padding: 5%">
        <br>
   <!--boton que guarda resultados en la tabla-->
   <form action="{{ route('guardar_personajes') }}" method="POST">
    @csrf
    <button class="btn btn-primary" type="submit">Guardar personajes en la base de datos</button>
</form>
<br>
        <table class="table">

            <!--encabezaado de la tabla -->
            <thead>

                <!---->
                <tr>

                    <!--items de la tabla-->
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Species</th>
                    <th scope="col">Detalle</th>
                </tr>

            </thead>

            <!--cuerpo de la tabla-->
            <tbody class="table-group-divider">

                <!-- inicio del ciclo de que recorreo todo el objeto para mostrar los datos-->
                @foreach ($personajes as $personaje)
                    <!---->
                    <tr>

                        <!-- itemps de la tabla -->
                        <td scope="row">{{ $personaje['id'] }}</td>
                        <td>{{ $personaje['name'] }}</td>
                        <td>{{ $personaje['status'] }}</td>
                        <td>{{ $personaje['species'] }}</td>
                        <td>

                            <!-- boton detalles -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#{{ $personaje['id'] }}">
                                Detalles
                            </button>

                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
    <!--fin de la tabla de consulta a la api-->

 







    <!-- Modal -->

    <!--inicio de la modal que muestra los detalles de los personajes-->
    @foreach ($personajes as $personaje)
        <div class="modal fade" id="{{ $personaje['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <!--boton  para cerrar modal en forma de x-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- cuuerpo de la modal-->
                    <div class="modal-body">
                        <p class="text-center">{{ $personaje['name'] }} </p>
                        <div class="text-center">
                            <img src="{{ $personaje['image'] }}" class="rounded">
                        </div>

                        <br>
                        <br>

                        <!-- inicio de la tabla con el detalle de personaje-->
                        <table class="table">

                            <tr>
                                <td>
                                    id:
                                </td>
                                <td>
                                    {{ $personaje['id'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    status:
                                </td>
                                <td>
                                    {{ $personaje['status'] }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    especie:
                                </td>
                                <td>
                                    {{ $personaje['species'] }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    tipo:
                                </td>
                                <td>
                                    {{ $personaje['type'] }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    genero:
                                </td>
                                <td>
                                    {{ $personaje['gender'] }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    creado:
                                </td>
                                <td>
                                    {{ $personaje['created'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    origen:
                                </td>
                                <td>
                                    {{ $personaje['origin']['name'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    location:
                                </td>
                                <td>
                                    {{ $personaje['location']['name'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    url:
                                </td>
                                <td>
                                    {{ $personaje['url'] }}
                                </td>
                            </tr>


                        </table>


                    </div>

                    <!-- boton para cerrar la modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                </div>

            </div>

        </div>
    @endforeach
@endsection
