@extends('template')

@section('content')

    <body>
<br>
        <h1 class="text-center">Personajes de Rick and Morty consultados por una base de datos </h1>

        <!-- inicio de la tabla consulta a la api -->
        <div style="padding: 5%">
            <table class="table">

                <!--encabezaado de la tabla -->
                <thead>

                    <!---->
                    <tr>

                        <!--items de la tabla-->
                        <th scope="col">Id</th>
                        <th></th>
                        <th scope="col">nombre</th>

                    </tr>

                </thead>
                <!--cuerpo de la tabla-->
                <tbody class="table-group-divider">

                    @foreach ($personajes as $personaje)
                        <!-- inicio del ciclo de que recorreo todo el objeto para mostrar los datos-->

                        <tr>

                            <!-- itemps de la tabla -->
                            <td scope="row">
                                {{ $personaje['id'] }}
                            </td>
                            <td>
                                <img style="max-width: 3em" src="{{ $personaje['image'] }}" class="rounded ">
                            </td>
                            <td>
                                <a>
                                    {{ $personaje['name'] }}
                                </a>

                            <td>

                                <!-- boton detalles -->
                                <a href="{{ route('personaje', $personaje->id) }}" type="button" class="btn btn-outline-primary">
                                    Detalles
                                </a>
                            </td>
                            <td>
                                <!-- boton detalles -->



                                <a  href="{{ route('personajes.editar', ['id' => $personaje->id]) }}"  type="button" class="btn btn-outline-warning">Editar</a>

                            </td>
                            </td>
                        </tr>
                    @endforeach









                    <br>





                </tbody>

            </table>

    </body>
@endsection
