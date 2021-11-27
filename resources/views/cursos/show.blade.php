@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Bienvenido al curso: {{ $curso->name }}
      </h1>
    </div>
  </header>
  <div class="w-full min-h-screen">
    <p>Categoria: {{ $curso->categoria }}</p>
    <p>{{ $curso->description }}</p>
    <div class="flex justify-center items-center">

      <a href="{{ route('cursos.index') }}">
        <button
          class="bg-blue-400 font-semibold text-white p-2 w-32 rounded-full hover:bg-blue-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
        >
          Volver atras
        </button>
      </a>
      <a href="{{ route('cursos.edit', $curso) }}">
        <button
          class="bg-yellow-300 font-semibold text-white p-2 w-32 rounded-full hover:bg-yellow-400 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
        >
          Editar Curso
        </button>
      </a>

      <form
        action="{{ route('cursos.destroy', $curso) }}"
        method="post"
      >
        @csrf
        @method('delete')
        <button
          class="bg-red-300 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-400 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
        >
          Eliminar
        </button>
      </form>
    </div>
  </div>
  <p>Categoria: {{ $curso->categoria }}</p>
  <p>{{ $curso->description }}</p>

@endsection
