<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Personaje;

use Illuminate\Http\Request;

class PersonajeaController extends Controller
{
    public function show($id)
{
    $personaje = Personaje::findOrFail($id);
    return view('personajes.show', compact('personaje'));
}
}
