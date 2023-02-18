@extends('template')

@section('content')
<body>
    
    <div style="padding: 2% 20% 2% 20%">
    <h2 class="text-center"> detalles de {{ $personaje['name'] }} </h2>
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
                {{ $personaje['origin'] }}
            </td>
        </tr>
        <tr>
            <td>
                location:
            </td>
            <td>
                {{ $personaje['location']}}
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
</body>
@endsection