@extends('layouts.template')

@section('title', 'Editar producto')

@section('content')

    <form action="{{ route('productos.update', $producto) }}" method="post">
        @csrf
        @method("put")
        <label for="">
            Nombre:
            <input type="text" name="name" value="{{ old('name', $producto->name) }}">
            <br>
        </label>
        @error('name')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Descripción:
            <textarea name="descripcion" rows="5">{{ old('descripcion', $producto->descripcion) }}</textarea><br>
        </label>
        @error('descripcion')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br>
        <br>
        <label for="">
            Marca:
            <input type="text" name="marca" value="{{ old('marca', $producto->marca) }}"><br>
        </label>
        @error('marca')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Talla:
            <input type="text" name="talla" value="{{ old('talla', $producto->talla) }}"><br>
        </label>
        
        @error('talla')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br><br>
        <label for="">
            Activo:
            <input type="text" name="activo" value="{{ old('activo', $producto->activo) }}">
        </label>
        <br>
        @error('activo')
        <small style="color:red">{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>

    <br><br>
    <a href="{{ route('productos.index') }}">Volver</a>

@endsection