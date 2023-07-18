@extends('layouts.template')

@section('title', 'Inicio')

@section('content')
    <h1>Primer crud de Laravel</h1>
    
    <ul>
        @foreach ($productos as $producto)
        <br>
        <li>
            <a href="{{ route('productos.show', $producto) }}">{{ $producto->name }}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('productos.create') }}">Crear nuevo producto</a>
    <br>
{{ $productos->links() }}
@endsection