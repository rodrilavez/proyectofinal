@extends('layouts.app')

@section('title', 'Usuarios Interesados en ' . $property->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    @php
        // Simulación de la propiedad y los usuarios interesados
        $property = (object) [
            'name' => 'Propiedad Ejemplo',
            'interestedUsers' => collect([
                (object) [
                    'name' => 'Juan Pérez',
                    'email' => 'juan.perez@example.com',
                    'phone' => '(442) 123-4567'
                ],
                (object) [
                    'name' => 'María Gómez',
                    'email' => 'maria.gomez@example.com',
                    'phone' => '(442) 765-4321'
                ]
            ])
        ];
    @endphp

    <h2 class="text-2xl font-bold mb-6">Usuarios Interesados en "{{ $property->name }}"</h2>
    <a href="{{ route('admin.interested') }}" class="text-blue-600 hover:underline mb-4 inline-block">← Volver a la lista</a>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Correo Electrónico</th>
                <th class="py-2 px-4 border-b">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($property->interestedUsers as $user)
            <tr>
                <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


{{-- @extends('layouts.app')

@section('title', 'Usuarios Interesados en ' . $property->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Usuarios Interesados en "{{ $property->name }}"</h2>
    <a href="{{ route('admin.interested') }}" class="text-blue-600 hover:underline mb-4 inline-block">← Volver a la lista</a>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Correo Electrónico</th>
                <th class="py-2 px-4 border-b">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($property->interestedUsers as $user)
            <tr>
                <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
