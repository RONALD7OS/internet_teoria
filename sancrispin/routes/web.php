
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', function (Illuminate\Http\Request $request) {
    // Aqui despues procesamos y guardamos el mensaje en la base de datos
    return back()->with('exito', 'Mensaje recibido, caserito.');
})->name('contacto.enviar');