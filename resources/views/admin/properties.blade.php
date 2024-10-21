@extends('layouts.app')

@section('title', 'Gestionar Propiedades')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Gestionar Propiedades</h2>
    
    <a href="{{ route('admin.properties.create') }}" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 mb-4 inline-block">Agregar Nueva Propiedad</a>

    @php
        // Simulación de propiedades
        $properties = [
            (object) [
                'id' => 1,
                'name' => 'Propiedad Ejemplo 1',
                'price' => 150000,
                'location' => 'Querétaro, México'
            ],
            (object) [
                'id' => 2,
                'name' => 'Propiedad Ejemplo 2',
                'price' => 250000,
                'location' => 'San Juan del Río, México'
            ],
            (object) [
                'id' => 3,
                'name' => 'Propiedad Ejemplo 3',
                'price' => 320000,
                'location' => 'El Marqués, Querétaro, México'
            ]
        ];
    @endphp

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Precio</th>
                <th class="py-2 px-4 border-b">Ubicación</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td class="py-2 px-4 border-b">{{ $property->name }}</td>
                <td class="py-2 px-4 border-b">${{ number_format($property->price, 2) }}</td>
                <td class="py-2 px-4 border-b">{{ $property->location }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="#" class="text-blue-600 hover:underline">Editar</a> |
                    <form action="#" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


{{-- @extends('layouts.app')

@section('title', 'Gestionar Propiedades')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Gestionar Propiedades</h2>
    <a href="{{ route('admin.properties.create') }}" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 mb-4 inline-block">Agregar Nueva Propiedad</a>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Precio</th>
                <th class="py-2 px-4 border-b">Ubicación</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
            <tr>
                <td class="py-2 px-4 border-b">{{ $property->name }}</td>
                <td class="py-2 px-4 border-b">${{ number_format($property->price, 2) }}</td>
                <td class="py-2 px-4 border-b">{{ $property->location }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.properties.edit', $property->id) }}" class="text-blue-600 hover:underline">Editar</a> |
                    <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
