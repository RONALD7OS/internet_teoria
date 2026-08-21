<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MensajeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'stock-cliente' => 'required|integer|min:0',
        ], [
            'stock-cliente.required' => 'campo es obligatorio.',
            'stock-cliente.integer' => 'debe ser un número entero .',
            'stock-cliente.min' => 'El stock no puede ser un número negativo.',
        ]);

        Mensaje::create([
            'nombre' => $request->input('nombre-cliente'),
            'correo' => $request->input('correo-cliente'),
            'mensaje' => $request->input('mensaje-cliente'),
            'stock' => $request->input('stock-cliente'),
        ]);

        return back()->with('exito', 'Mensaje recibido, caserito.');
    }

    public function index()
    {
        $mensajes = Mensaje::orderBy('created_at', 'desc')->get();
        return view('mensajes', ['mensajes' => $mensajes]);
    }
}