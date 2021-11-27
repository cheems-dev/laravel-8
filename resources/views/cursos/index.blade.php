@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')


  <div class=" max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <h1 class="text-center text-green-500 text-4xl  mb-3">Cursos</h1>
    <div class="container">
      <a href="{{ route('cursos.create') }}">
        <button class="py-3 px-6 text-white rounded-lg bg-green-500 shadow-lg block md:inline-block">
          Crear curso
        </button>
      </a>
    </div>
    <div class="px-4 py-2 sm:px-0">
      <div class="border-4 border-dashed border-gray-200 rounded-lg">
        <div class="container">
          <div class="grid grid-cols-4 gap-6">

            @foreach ($cursos as $curso)
              <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">
                    <a href="{{ route('cursos.show', $curso) }}">
                      {{ $curso->name }}
                    </a>
                  </div>
                  <p class="text-gray-700 text-base">
                    {{ $curso->description }}
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                  ># {{ $curso->categoria }}</span>

                </div>
              </div>

            @endforeach
          </div>

        </div>
        {{ $cursos->links() }}

      </div>
    </div>
    <!-- /End replace -->
  </div>

@endsection
