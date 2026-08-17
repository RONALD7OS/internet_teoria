@extends('layouts.app')

@section('titulo', 'Peladora de Trigo San Crispín - Contacto')

@section('contenido')

    <section id="contacto">
        <h2>Contacto</h2>
        <p class="parrafo">Para más información sobre nuestros productos y servicios contáctenos a través de los siguientes medios:</p>
        <ul>
            <li>Teléfono: 123456789</li>
            <li>Correo: sancrispin@correo.com</li>
        </ul>

        <form id="formulario-contacto" action="{{ route('contacto.enviar') }}" method="POST" novalidate>
            @csrf
            <label for="nombre-cliente">Nombre:</label>
            <input type="text" id="nombre-cliente" name="nombre-cliente" placeholder="Tu nombre" required>

            <label for="correo-cliente">Correo:</label>
            <input type="email" id="correo-cliente" name="correo-cliente" placeholder="tucorreo@ejemplo.com" required>

            <label for="mensaje-cliente">Mensaje:</label>
            <textarea id="mensaje-cliente" name="mensaje-cliente" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>

            <button type="submit">Enviar</button>

            <p id="aviso-contacto" class="aviso"></p>
        </form>
    </section>

@endsection