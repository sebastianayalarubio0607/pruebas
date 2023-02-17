<?php

namespace App\Http\Controllers;
use App\Models\PersonajeArIkBace;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonajeArIkBaceController extends Controller
{


public function index()
{
    $personajes = PersonajeArIkBace::all();
    return view('personajearikbace.index', ['personajes' => $personajes]);
}

public function create()
{
    return view('personajearikbace.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        'fecha' => 'required|date'
    ]);
    $personaje = PersonajeArIkBace::create($validatedData);
    return redirect('/personajearikbace')->with('success', 'Personaje creado correctamente.');
}

public function show(PersonajeArIkBace $personajeArIkBace)
{
    return view('personajearikbace.show', ['personaje' => $personajeArIkBace]);
}

public function edit(PersonajeArIkBace $personajeArIkBace)
{
    return view('personajearikbace.edit', ['personaje' => $personajeArIkBace]);
}

public function update(Request $request, PersonajeArIkBace $personajeArIkBace)
{
    $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        'fecha' => 'required|date'
    ]);
    $personajeArIkBace->update($validatedData);
    return redirect('/personajearikbace')->with('success', 'Personaje actualizado correctamente.');
}

public function destroy(PersonajeArIkBace $personajeArIkBace)
{
    $personajeArIkBace->delete();
    return redirect('/personajearikbace')->with('success', 'Personaje eliminado correctamente.');
}

}
