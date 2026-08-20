@extends('layouts.app')

@section('titulo', 'Mensajes - Peladora de Trigo San Crispín')

@section('contenido')

    <section id="mensajes">
        <h2>Mensajes recibidos</h2>

        @if ($mensajes->isEmpty())
            <p class="parrafo">Todavía no hay mensajes.</p>
        @else
            <ul>
                @foreach ($mensajes as $mensaje)
                    <li>
                        <strong>{{ $mensaje->nombre }}</strong> ({{ $mensaje->correo }})<br>
                        {{ $mensaje->mensaje }}<br>
                        <small>{{ $mensaje->created_at->format('d/m/Y H:i') }}</small>
                    </li>
                @endforeach
            </ul>
        @endif
        
        <h2>Agregar Nuevo Producto</h2>

        @if(session('exito'))
            <p class="parrafo">{{ session('exito') }}</p>
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

        <p><a href="{{ route('login') }}">Volver al login</a></p>
    </section>

@endsection