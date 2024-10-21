@extends('layouts.app')

@section('title', 'Usuarios Interesados')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Propiedades con Usuarios Interesados</h2>

    @php
        // Simulación de propiedades con usuarios interesados
        $properties = [
            (object) [
                'id' => 1,
                'name' => 'Propiedad 1',
                'interestedUsers' => collect([
                    (object) ['name' => 'Usuario 1'],
                    (object) ['name' => 'Usuario 2']
                ])
            ],
            (object) [
                'id' => 2,
                'name' => 'Propiedad 2',
                'interestedUsers' => collect([
                    (object) ['name' => 'Usuario 3']
                ])
            ],
            (object) [
                'id' => 3,
                'name' => 'Propiedad 3',
                'interestedUsers' => collect() // Sin usuarios interesados
            ]
        ];
    @endphp

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre de la Propiedad</th>
                <th class="py-2 px-4 border-b">Usuarios Interesados</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                @if($property->interestedUsers->count() > 0)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $property->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $property->interestedUsers->count() }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="#" class="text-blue-600 hover:underline">Ver Detalles</a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection


{{-- @extends('layouts.app')

@section('title', 'Usuarios Interesados')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Propiedades con Usuarios Interesados</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre de la Propiedad</th>
                <th class="py-2 px-4 border-b">Usuarios Interesados</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                @if($property->interestedUsers->count() > 0)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $property->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $property->interestedUsers->count() }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('admin.properties.interested.show', $property->id) }}" class="text-blue-600 hover:underline">Ver Detalles</a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
