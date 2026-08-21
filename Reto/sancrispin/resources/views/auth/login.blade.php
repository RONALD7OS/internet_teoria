@extends('layouts.app')

@section('titulo', 'Peladora de Trigo San Crispín - Iniciar sesión')

@section('contenido')

    <section id="login">
        <h2>Iniciar sesión</h2>

        @if (session('error'))
            <p class="aviso error">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login.intentar') }}" method="POST">
            @csrf
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </section>

@endsection