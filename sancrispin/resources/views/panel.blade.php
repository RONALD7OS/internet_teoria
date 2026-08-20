@extends('layouts.app')

@section('titulo', 'Panel - Peladora de Trigo San Crispín')

@section('contenido')

    <section id="panel">
        <h2>Panel de administración</h2>
        <p class="parrafo">Bienvenido, {{ Auth::user()->name }}.</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>

        <hr>

        <h3>Agregar Nuevo Producto al Catálogo</h3>

        @if(session('exito'))
            <p class="mensaje-exito">{{ session('exito') }}</p>
        @endif

        <form action="{{ route('productos.guardar.rapido') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre del Producto:</label><br>
                <input type="text" name="nombre" id="nombre" required>
            </div>

            <div>
                <label for="precio">Precio (Bs.):</label><br>
                <input type="number" step="0.01" name="precio" id="precio" required>
            </div>

            <div>
                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion" rows="3"></textarea>
            </div>

            <button type="submit">Guardar Producto</button>
        </form>

        <hr>

        <h3>Mensajes de contacto recibidos</h3>

        @if(isset($mensajes) && $mensajes->count() > 0)
            <div class="mensajes-contenedor">
                @foreach($mensajes as $m)
                    <div class="mensaje-card">
                        <strong>{{ $m->nombre }}</strong> ({{ $m->correo }})
                        <p>{{ $m->mensaje }}</p>
                        <small>Enviado: {{ $m->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                @endforeach
            </div>
        @else
            <p>No hay mensajes recibidos por el momento, caserito.</p>
        @endif

    </section>

@endsection