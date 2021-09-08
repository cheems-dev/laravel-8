@extends('layouts.plantilla')

@section('title', 'Update')

@section('content')
  <h1>Actualiza un curso</h1>
  <a href="{{route('cursos.index')}}">Volver atras</a>
  <form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
    <label for="name">
      <p>Nombre: </p>
      <input type="text" id="name" name="name" value="{{old('name',$curso->name)}}">
    </label>
    @error('name')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <label for="description">
      <p>Description: </p>
      <textarea name="description" id="description" cols="30" rows="10">{{old('description',$curso->description)}}</textarea>
    </label>
    <br>
    @error('description')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <label for="category">
      <p>Categoria: </p>
      <input type="text" id="category" name="categoria"value="{{old('categoria',$curso->categoria)}}">
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