@extends('layouts.plantilla')

@section('title', 'Update')

@section('content')
  <div class="flex justify-center items-center w-full py-12 bg-blue-100">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block h-full text-center text-gray-800 text-2xl font-bold mb-6">Guardar curso nuevo</h1>
      <p class="text-red-600 flex justify-end"><a href="{{ route('cursos.index') }}">Volver atras</a></p>

      <form
        action="{{ route('cursos.update', $curso) }}"
        method="POST"
      >
        @csrf
        @method('put')

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="name"
          >Nombre</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $curso->name) }}"
          >
          @error('name')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="description"
          >Description:</label>
          <textarea
            class="border py-2 px-3 text-grey-800"
            name="description"
            id="description"
          >{{ old('description', $curso->description) }}</textarea>
          @error('description')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="category"
          >Categoria:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="categoria"
            id="category"
            value="{{ old('categoria', $curso->categoria) }}"
          >
          @error('categoria')
            <small>*{{ $message }}</small>
          @enderror
        </div>
        <div class="flex justify-center">

          <button
            class=" py-3 px-6 text-white rounded-lg bg-green-500 shadow-lg "
            type="submit"
          >
            Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
