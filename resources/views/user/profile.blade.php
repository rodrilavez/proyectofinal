@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Mi Perfil</h2>

    @php
        // Simulación de un usuario para cuando no estás autenticado
        $user = auth()->user() ?? (object) [
            'name' => 'Juan Pérez',
            'gender' => 'Masculino',
            'birth_date' => '1990-05-15',
            'email' => 'juan.perez@example.com',
            'phone' => '(442) 123-4567'
        ];
    @endphp

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Sexo:</strong> {{ $user->gender }}</p>
        <p><strong>Fecha de Nacimiento:</strong> {{ $user->birth_date }}</p>
        <p><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
        <p><strong>Número de Teléfono:</strong> {{ $user->phone }}</p>
        <a href="{{ route('user.edit') }}" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Editar Perfil</a>
    </div>
</div>
@endsection


{{-- @extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Mi Perfil</h2>
    <div class="bg-white rounded-lg shadow-lg p-6">
        <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Sexo:</strong> {{ auth()->user()->gender }}</p>
        <p><strong>Fecha de Nacimiento:</strong> {{ auth()->user()->birth_date }}</p>
        <p><strong>Correo Electrónico:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Número de Teléfono:</strong> {{ auth()->user()->phone }}</p>
        <a href="{{ route('user.edit') }}" class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700">Editar Perfil</a>
    </div>
</div>
@endsection --}}
