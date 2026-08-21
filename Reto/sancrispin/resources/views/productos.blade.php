@extends('layouts.app')

@section('titulo', 'Productos - Peladora de Trigo San Crispín')

@section('contenido')
    <section id="productos">
        <h2>Nuestros Productos</h2>

        @if(session('exito'))
            <p class="mensaje-exito">{{ session('exito') }}</p>
        @endif

        @if($productos->isEmpty())
            <p>No hay productos registrados en la base de datos todavía, caserito.</p>
        @else
            <div class="productos-galeria">
                @foreach($productos as $p)
                    <div class="producto-card">
                        <h3>{{ $p->nombre }}</h3>
                        <p><strong>Precio:</strong> {{ $p->precio }} Bs.</p>
                        <p>{{ $p->descripcion }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection