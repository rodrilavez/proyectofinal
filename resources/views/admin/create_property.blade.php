@extends('layouts.app')

@section('title', 'Agregar Nueva Propiedad')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Agregar Nueva Propiedad</h2>

    <form method="POST" action="#">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700" for="name">Nombre de la Propiedad</label>
            <input class="w-full p-2 border border-gray-300 rounded" id="name" name="name" type="text" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="price">Precio</label>
            <input class="w-full p-2 border border-gray-300 rounded" id="price" name="price" type="number" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="location">Ubicación</label>
            <input class="w-full p-2 border border-gray-300 rounded" id="location" name="location" type="text" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="description">Descripción</label>
            <textarea class="w-full p-2 border border-gray-300 rounded" id="description" name="description" rows="5" required></textarea>
        </div>

        <button type="submit" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Guardar Propiedad</button>
    </form>
</div>
@endsection
