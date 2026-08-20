<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MensajeController extends Controller
{
    public function store(Request $request)
    {
        Mensaje::create([
            'nombre' => $request->input('nombre-cliente'),
            'correo' => $request->input('correo-cliente'),
            'mensaje' => $request->input('mensaje-cliente'),
        ]);

        return back()->with('exito', 'Mensaje recibido, caserito.');
    }

    public function index()
    {
        $mensajes = Mensaje::orderBy('created_at', 'desc')->get();
        return view('mensajes', ['mensajes' => $mensajes]);
    }
}