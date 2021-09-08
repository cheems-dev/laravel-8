@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')

  <h1>Bienvenido al curso: {{$curso->name}} </h1>
  <a href="{{route('cursos.index')}}">Volver atras</a>
  <br>
  <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
  <p>Categoria: {{$curso->categoria}}</p>
  <p>{{$curso->description}}</p>

  <form action="{{route('cursos.destroy', $curso)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">
      Eliminar
    </button>
  </form>
@endsection