@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
  <div class="flex justify-center items-center w-full py-14 bg-blue-100">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block h-full text-center text-gray-800 text-2xl font-bold mb-6">Contactanos</h1>
      <p class="text-red-600 flex justify-end"><a href="{{ route('cursos.index') }}">Volver atras</a></p>

      <form
        action="{{ route('email.store') }}"
        method="POST"
      >
        @csrf
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
            placeholder="Coloque su nombre"
          >
          @error('name')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="email"
          >Correo:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="email"
            name="email"
            id="email"
            placeholder="Coloque su correo"
          >
          @error('email')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="message"
          >Mensaje:</label>
          <textarea
            class="border py-2 px-3 text-grey-800"
            name="message"
            id="message"
            placeholder="Coloque su mensaje"
          ></textarea>
          @error('message')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex justify-center">
          <button
            class=" py-3 px-6 text-white rounded-lg bg-green-500 shadow-lg "
            type="submit"
          >
            Enviar
          </button>
      </form>
    </div>
  </div>
  @if (session('sucess'))
    <script>
      alert("{{ session('sucess') }}")
    </script>
  @endif

@endsection
