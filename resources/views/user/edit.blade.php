@extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Editar Perfil</h2>

    @php
        // Simulación de un usuario si no estás autenticado
        $user = auth()->user() ?? (object) [
            'name' => 'Juan Pérez',
            'gender' => 'Masculino',
            'birth_date' => '1990-05-15',
            'email' => 'juan.perez@example.com',
            'phone' => '(442) 123-4567',
            'interestedProperties' => collect([
                (object) [
                    'name' => 'Propiedad Ejemplo',
                    'price' => 200000,
                    'image_url' => 'https://via.placeholder.com/600x400'
                ],
                (object) [
                    'name' => 'Propiedad 2',
                    'price' => 300000,
                    'image_url' => 'https://via.placeholder.com/600x400'
                ]
            ])
        ];
    @endphp

    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <form method="POST" action="#">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Nombre</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="name" name="name" type="text" value="{{ $user->name }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="gender">Sexo</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="gender" name="gender" required>
                    <option value="Masculino" {{ $user->gender == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ $user->gender == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="Otro" {{ $user->gender == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="birth_date">Fecha de Nacimiento</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="birth_date" name="birth_date" type="date" value="{{ $user->birth_date }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Correo Electrónico</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" value="{{ $user->email }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="phone">Número de Teléfono</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="phone" name="phone" type="text" value="{{ $user->phone }}" required/>
            </div>
            <button type="submit" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Guardar Cambios</button>
        </form>
    </div>

    <h2 class="text-2xl font-bold mb-6">Propiedades de Interés</h2>
    @if($user->interestedProperties->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($user->interestedProperties as $property)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{ $property->image_url }}" alt="{{ $property->name }}">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                    <p class="text-gray-600">${{ number_format($property->price, 2) }}</p>
                    <a href="#" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Ver Detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p>No has mostrado interés en ninguna propiedad.</p>
    @endif
</div>
@endsection



{{-- @extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Editar Perfil</h2>
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <form method="POST" action="{{ route('user.update') }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Nombre</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="name" name="name" type="text" value="{{ auth()->user()->name }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="gender">Sexo</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="gender" name="gender" required>
                    <option value="Masculino" {{ auth()->user()->gender == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ auth()->user()->gender == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="Otro" {{ auth()->user()->gender == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="birth_date">Fecha de Nacimiento</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="birth_date" name="birth_date" type="date" value="{{ auth()->user()->birth_date }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Correo Electrónico</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" value="{{ auth()->user()->email }}" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="phone">Número de Teléfono</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="phone" name="phone" type="text" value="{{ auth()->user()->phone }}" required/>
            </div>
            <button type="submit" class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Guardar Cambios</button>
        </form>
    </div>
    <h2 class="text-2xl font-bold mb-6">Propiedades de Interés</h2>
    @if(auth()->user()->interestedProperties->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach(auth()->user()->interestedProperties as $property)
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
        <p>No has mostrado interés en ninguna propiedad.</p>
    @endif
</div>
@endsection --}}
