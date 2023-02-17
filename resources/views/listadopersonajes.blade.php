@extends('template')

@section('content')

    <body>

        <h1 class="text-center">Personajes de Rick and Morty consultados por una bace de datos </h1>

        <!-- inicio de la tabla consulta a la api -->
        <div style="padding: 5%">
            <table class="table">

                <!--encabezaado de la tabla -->
                <thead>

                    <!---->
                    <tr>

                        <!--items de la tabla-->
                        <th scope="col">Id</th>
                        <th scope="col">nombre</th>
                       
                    </tr>

                </thead>
                <!--cuerpo de la tabla-->
                <tbody class="table-group-divider">

                    @foreach ($personajes as $personaje)
                     


                        <!-- inicio del ciclo de que recorreo todo el objeto para mostrar los datos-->

                        <tr>

                            <!-- itemps de la tabla -->
                            <td scope="row">{{ $personaje['id'] }}</td>
                            <td>
                                <a >
                                    {{ $personaje['nombre'] }}
                                </a>

                                <td>

                                    <!-- boton detalles 
                                    <a href="{{ route('personaje', $personaje->id) }}" type="button" class="btn btn-primary" >
                                        detalles
                                    </a>-->
        
                                     <!-- boton detalles -->
                                 
                                    
                                    
                                    <a href="{{ route('personajes.editar', ['id' => $personaje->id]) }}">Editar</a>
                                
                                </td>
                            </td>
                        </tr>
                    @endforeach





                  

                    

                    <br>





                </tbody>

            </table>

    </body>
@endsection
