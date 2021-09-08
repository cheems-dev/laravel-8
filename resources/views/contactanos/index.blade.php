@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
  <h1>Crear un nuevo curso</h1>
  <a href="{{ route('cursos.index') }}">Volver atras</a>

  <form
    action="{{ route('email.store') }}"
    method="POST"
  >
    @csrf
    <label for="name">
      <p>Nombre: </p>
      <input
        type="text"
        id="name"
        name="name"
        placeholder="Coloque un nombre"
      >
    </label>
    <br>
    @error('name')
      <small>*{{ $message }}</small>
    @enderror
    <br>
    <label for="email">
      <p>Email: </p>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Coloque su corre"
      >
    </label>
    <br>
    @error('email')
      <small>*{{ $message }}</small>
    @enderror
    <br>
    <label for="message">
      <p>Description: </p>
      <textarea
        name="message"
        id="message"
        cols="30"
        rows="10"
        placeholder="Coloque una descripcion"
      ></textarea>
    </label>
    <br>
    @error('message')
      <br>
      <small>*{{ $message }}</small>
      <br>
    @enderror
    <br>
    <button type="submit">Enviar</button>
  </form>

  @if (session('sucess'))
    <script>
      alert("{{ session('sucess') }}")
    </script>
  @endif

@endsection
