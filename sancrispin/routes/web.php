<?php

/*use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MensajeController;
use App\Models\Producto;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/productos', function () {
    return view('producto');
})->name('productos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', function (Illuminate\Http\Request $request) {
    
    return back()->with('exito', 'Mensaje recibido, caserito.');
})->name('contacto.enviar');
//l

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    $credenciales = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
})->name('login.intentar');

Route::post('/logout', function (Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// aut

Route::get('/panel', function () {
    return view('panel');
})->middleware('auth')->name('panel');


Route::get('/panel', function () {
    return view('panel');
})->middleware('auth')->name('panel');

Route::get('/mensajes', [MensajeController::class, 'index'])->middleware('auth')->name('mensajes');
use App\Http\Controllers\ProductoController;

Route::middleware(['auth'])->group(function () {
    
    Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');

   
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
});

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos', compact('productos'));
});


Route::post('/productos/guardar', function (Request $request) {
    Producto::create([
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio'),
        'descripcion' => $request->input('descripcion'),
    ]);
    return back()->with('exito', 'Producto agregado');
})->middleware('auth');*/


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\MensajeController;
use App\Models\Producto;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos', compact('productos'));
})->name('productos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [MensajeController::class, 'store'])->name('contacto.enviar');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credenciales = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        return redirect()->intended('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
})->name('login.intentar');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/panel', [MensajeController::class, 'index'])->name('panel');
    Route::get('/mensajes', [MensajeController::class, 'index'])->name('mensajes');

    Route::post('/productos/guardar', function (Request $request) {
        Producto::create([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
        ]);
        return back()->with('exito', 'Producto agregado con éxito, caserito.');
    })->name('productos.guardar.rapido');
});


/*App\Models\User::create(["name" => "Ronald Montano", "email" => "admin@sancrispin.com", "password" => bcrypt("sancrispin123")]);*/
