@extends('layouts.app')

@section('title', $property->name ?? 'Propiedad')

@section('content')
<div class="container mx-auto px-4 py-8">
    @php
        // Simulación de una propiedad
        $property = (object) [
            'id' => 1,
            'name' => 'Propiedad Ejemplo',
            'price' => 350000,
            'location' => 'Querétaro, México',
            'description' => 'Una hermosa propiedad en el corazón de Querétaro con vistas increíbles y amplio espacio.',
            'image_url' => 'https://via.placeholder.com/800x600',
            'isInterestedBy' => function($user) {
                return false; // Simulación de que el usuario no está interesado
            }
        ];
    @endphp

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img class="w-full h-96 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
        <div class="p-6">
            <h2 class="text-3xl font-bold mb-4">{{ $property->name }}</h2>
            <p class="text-gray-600 mb-2"><strong>Precio:</strong> ${{ number_format($property->price, 2) }}</p>
            <p class="text-gray-600 mb-2"><strong>Ubicación:</strong> {{ $property->location }}</p>
            <p class="text-gray-600 mb-4"><strong>Descripción:</strong> {{ $property->description }}</p>

            @auth
                @if($property->isInterestedBy(auth()->user()))
                    <button class="bg-green-600 text-white py-2 px-4 rounded" disabled>Ya estás interesado</button>
                @else
                    <form action="{{ route('properties.interest', $property->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Estoy Interesado</button>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }}" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Inicia sesión para mostrar interés</a>
            @endauth
        </div>
    </div>
</div>
@endsection


{{-- @extends('layouts.app')

@section('title', $property->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img class="w-full h-96 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
        <div class="p-6">
            <h2 class="text-3xl font-bold mb-4">{{ $property->name }}</h2>
            <p class="text-gray-600 mb-2"><strong>Precio:</strong> ${{ number_format($property->price, 2) }}</p>
            <p class="text-gray-600 mb-2"><strong>Ubicación:</strong> {{ $property->location }}</p>
            <p class="text-gray-600 mb-4"><strong>Descripción:</strong> {{ $property->description }}</p>
            @auth
                @if($property->isInterestedBy(auth()->user()))
                    <button class="bg-green-600 text-white py-2 px-4 rounded" disabled>Ya estás interesado</button>
                @else
                    <form action="{{ route('properties.interest', $property->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Estoy Interesado</button>
                    </form>
                @endif
            @else
                <a href="{{ route('login') }}" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Inicia sesión para mostrar interés</a>
            @endauth
        </div>
    </div>
</div>
@endsection --}}
