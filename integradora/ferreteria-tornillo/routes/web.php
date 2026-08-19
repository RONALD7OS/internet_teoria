<?php

use App\Models\Herramienta;
use Illuminate\Http\Request;

Route::get('/herramientas', function () {
    $herramientas = Herramienta::all();
    return view('herramientas.index', compact('herramientas'));
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas.nuevo');
});
Route::post('/herramientas/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Escribí el nombre de la herramienta.',
        'precio.required' => 'Escribí el precio de la herramienta.',
        'precio.integer' => 'El precio se anota solo con cifras.',
    ]);

    Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/herramientas');
});