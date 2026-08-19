@extends('layout')

@section('title', 'Ferretería El Tornillo')

@section('content')
    <h1>Ferretería El Tornillo</h1>

    <p>
        Somos una ferretería de barrio con más de 15 años atendiendo a nuestros vecinos,
        ofreciendo herramientas de calidad para cada proyecto grande o chico.
    </p>

    <p>Hay {{ count($herramientas) }} herramientas en el inventario.</p>

    @foreach ($herramientas as $herramienta)
        <p>{{ $herramienta->nombre }} → {{ $herramienta->precio }} Bs</p>
    @endforeach

    <p>Inventario atendido por Ronald Montaño</p>

    <a href="/herramientas/nuevo">Registrar nueva herramienta</a>
@endsection