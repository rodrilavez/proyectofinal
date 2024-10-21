@extends('layouts.app')

@section('title', 'Propiedades Guardadas')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Propiedades Guardadas</h2>

    @php
        // Simulación de propiedades guardadas
        $properties = collect([
            (object) [
                'id' => 1,
                'name' => 'Propiedad Ejemplo 1',
                'price' => 150000,
                'image_url' => 'https://via.placeholder.com/600x400'
            ],
            (object) [
                'id' => 2,
                'name' => 'Propiedad Ejemplo 2',
                'price' => 250000,
                'image_url' => 'https://via.placeholder.com/600x400'
            ],
            (object) [
                'id' => 3,
                'name' => 'Propiedad Ejemplo 3',
                'price' => 300000,
                'image_url' => 'https://via.placeholder.com/600x400'
            ]
        ]);
    @endphp

    @if($properties->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($properties as $property)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                <p class="text-gray-600">${{ number_format($property->price, 2) }}</p>
                <a href="{{ route('properties.show', $property->id) }}" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Ver Detalles</a>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <p>No tienes propiedades guardadas.</p>
    @endif
</div>
@endsection



{{-- @extends('layouts.app')

@section('title', 'Propiedades Guardadas')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Propiedades Guardadas</h2>
    @if($properties->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($properties as $property)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                <p class="text-gray-600">${{ number_format($property->price, 2) }}</p>
                <a href="{{ route('properties.show', $property->id) }}" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Ver Detalles</a>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <p>No tienes propiedades guardadas.</p>
    @endif
</div>
@endsection --}}
