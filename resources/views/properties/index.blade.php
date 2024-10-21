@extends('layouts.app')

@section('title', 'Propiedades')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-center">Propiedades Disponibles</h2>

    <!-- Formulario de filtros -->
    <form method="GET" action="#" class="mb-8">
        <div class="flex flex-col md:flex-row md:space-x-4">
            <input type="text" name="location" placeholder="Ubicación" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0">
            <input type="number" name="price_min" placeholder="Precio Mínimo" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0">
            <input type="number" name="price_max" placeholder="Precio Máximo" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0">
            <button type="submit" class="w-full md:w-1/4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Filtrar</button>
        </div>
    </form>

    <!-- Simulación de propiedades -->
    @php
        $properties = [
            (object) [
                'name' => 'Propiedad 1',
                'price' => 150000,
                'location' => 'Ciudad Ejemplo',
                'image_url' => 'https://via.placeholder.com/600x400'
            ],
            (object) [
                'name' => 'Propiedad 2',
                'price' => 250000,
                'location' => 'Ciudad Ejemplo 2',
                'image_url' => 'https://via.placeholder.com/600x400'
            ],
            (object) [
                'name' => 'Propiedad 3',
                'price' => 300000,
                'location' => 'Ciudad Ejemplo 3',
                'image_url' => 'https://via.placeholder.com/600x400'
            ]
        ];
    @endphp

    <!-- Mostrar las propiedades -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($properties as $property)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                <p class="text-gray-600">${{ number_format($property->price, 2) }}</p>
                <p class="text-gray-600">{{ $property->location }}</p>
                <a href="#" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Ver Detalles</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Paginación simulada -->
    <div class="mt-8">
    <p class="text-center">Paginación simulada</p>
    </div>
</div>
@endsection

{{-- 
@extends('layouts.app')

@section('title', 'Propiedades')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-center">Propiedades Disponibles</h2>
    <form method="GET" action="{{ route('properties.index') }}" class="mb-8">
        <div class="flex flex-col md:flex-row md:space-x-4">
            <input type="text" name="location" placeholder="Ubicación" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0" value="{{ request('location') }}">
            <input type="number" name="price_min" placeholder="Precio Mínimo" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0" value="{{ request('price_min') }}">
            <input type="number" name="price_max" placeholder="Precio Máximo" class="w-full md:w-1/3 p-2 border border-gray-300 rounded mb-4 md:mb-0" value="{{ request('price_max') }}">
            <button type="submit" class="w-full md:w-1/4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Filtrar</button>
        </div>
    </form>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($properties as $property)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                <p class="text-gray-600">${{ number_format($property->price, 2) }}</p>
                <p class="text-gray-600">{{ $property->location }}</p>
                <a href="{{ route('properties.show', $property->id) }}" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Ver Detalles</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $properties->links() }}
    </div>
</div>
@endsection --}}
