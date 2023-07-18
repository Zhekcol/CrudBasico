@extends('layouts.template')

@section('title', 'Inicio')

@section('content')
    <h1>El producto {{$producto->name}}</h1>

    <strong>Descripción: </strong><p>{{$producto->descripcion}}</p><br>
    <strong>Marca: </strong><p>{{$producto->marca}}</p><br>
    <strong>Talla: </strong><p>{{$producto->talla}}</p><br>
    <strong>Activos: </strong><p>{{$producto->activo}}</p><br>

    <a href="{{ route('productos.index') }}">Volver</a>
    <a href="{{ route('productos.edit', $producto) }}">Editar</a>

    <form action="{{ route('productos.destroy', $producto) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit">Eliminar</button>
    </form>
@endsection