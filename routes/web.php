<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonajeController;


Route::controller(PersonajeController::class)->group(function () {  


    // -------consultas --------------------------
/*
 * consulta la vista inicial
 */

Route::get('/', function () {
    return view('tabla');
});


/**
 * consulta la api 
 */
Route::get('/', 'index');



/**
 * consulta los personajes
 */
Route::get('/personajes','personajes')->name('listadopersonajes');

/**
 * consulta los personajes
 */
Route::get( 'personaje/{personaje:id}','personaje')->name('personaje');

/**
 * consulta los personajes
 */
Route::get( 'personajeEditar/{personaje:id}','edit')->name('edit');

Route::get('/personajes/{id}/editar', 'PersonajesController@editar');
Route::put('/personajes/editar/{id}', 'PersonajeController@update')->name('personajes.editar');









// -------guarda --------------------------

/**
 * guardado de los personajes en la base de datos
 */
Route::post('/guardar-personajes',  'guardarPersonajes')->name('guardar_personajes');

});