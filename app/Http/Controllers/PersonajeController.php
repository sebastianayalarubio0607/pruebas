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
                'name' => $personaje['name'],
                'image' => $personaje['image'],
                'status' => $personaje['status'],
                'species' => $personaje['species'],
                'type' => $personaje['type'],
                'gender' => $personaje['gender'],
                'created' => $personaje['created'],
                'origin' => $personaje['origin']['name'],
                'location' => $personaje['location']['name'],
                'url' => $personaje['url'],
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

    public function edit($id)
    {
        $personaje = Personajes::find($id);

        return view('edit', compact('personaje'));
    }

    public function update(Request $request, $id)
    {
        $personaje = Personajes::find($id);
        $personaje->name = $request->input('name');
        $personaje->status = $request->input('status');
        $personaje->species = $request->input('species');
        $personaje->type = $request->input('type');
        $personaje->gender = $request->input('gender');
        $personaje->origin = $request->input('origin');
        $personaje->type = $request->input('location');
        $personaje->gender = $request->input('url');
        
        $personaje->save();



   
     
        


        return redirect()->route('listadopersonajes');
    }
}
