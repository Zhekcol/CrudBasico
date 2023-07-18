@extends('layouts.template')

@section('title', 'Inicio')

@section('content')

<h1>
    Crear un nuevo producto
</h1>
    
    <form action="{{ route('productos.store') }}" method="post">

        @csrf
        <label for="">
            Nombre:
            <input type="text" name="name">
            <br>
        </label>
        @error('name')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Descripción:
            <textarea name="descripcion" rows="5"></textarea><br>
        </label>
        @error('descripcion')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Marca:
            <input type="text" name="marca"><br>
        </label>
        @error('marca')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Talla:
            <input type="text" name="talla"><br>
        </label>
        @error('talla')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Activo:
            <input type="text" name="activo">
        </label>
        @error('activo')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <br>
        <button type="submit">Envíar</button>
    </form>

    <br><br>
    <a href="{{ route('productos.index') }}">Volver</a>

@endsection