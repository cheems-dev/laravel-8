@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
  <h1>Crear un nuevo curso</h1>
  <a href="{{route('cursos.index')}}">Volver atras</a>
  <form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label for="name">
      <p>Nombre: </p>
      <input type="text" id="name" name="name" placeholder="Coloque un nombre" value="{{old('name')}}">
    </label>
    <br>
    @error('name')
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label for="description">
      <p>Description: </p>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Coloque una descripcion">{{old('description')}}</textarea>
    </label>
    <br>
    @error('description')
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label for="category">
      <p>Categoria: </p>
      <input type="text" id="category" name="categoria" placeholder="Coloque un nombre" value="{{old('categoria')}}">
    </label>
    <br>
    @error('categoria')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <button type="submit">Enviar</button>
  </form>
@endsection