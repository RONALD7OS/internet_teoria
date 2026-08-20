<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Peladora de Trigo San Crispín')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <img src="{{ asset('img/logosancrispin.png') }}" width="200" height="200" alt="logo" class="logo">
        <h1 id="nombre">Peladora de Trigo San Crispín</h1>
        <nav>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('productos') }}">Productos</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>

            </ul>
            <button id="modo-oscuro-btn">🌙 Modo oscuro</button>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2026 Peladora de Trigo San Crispín. Todos los derechos reservados.</p>
        <p>Ronald Montaño</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>

</html>