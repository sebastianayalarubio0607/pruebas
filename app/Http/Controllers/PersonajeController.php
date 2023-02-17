<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\personajes;
use Illuminate\Http\Request;


class PersonajeController extends Controller
{
    /**
     * consulta la api para mostrarla
     */
    public function index()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $personajes = $response->json()['results'];

        return view('tabla', compact('personajes'));
    }



    /**
     * consulta la api y guarda el resultado en la bace de datos 
     */
    public function guardarPersonajes()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $personajes = $response->json()['results'];

        foreach ($personajes as $personaje) {
            DB::table('personajes')->insert([
                'nombre' => $personaje['name'],
                'especie' => $personaje['species'],
                'estado' => $personaje['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back();
    }



    /**
     * consulta a la bace de datos los personajes guardados 
     */

    public function personajes()
    {
        $personajesb = personajes::get();
        return view('listadopersonajes', ['personajes' => $personajesb]);
    }




    /**
     * consulta a un solo personaje guardados en la bace de datos 
     */

    public  function personaje(personajes $personaje)
    {

        return view('personaje', ['personaje' => $personaje]);
    }





}
