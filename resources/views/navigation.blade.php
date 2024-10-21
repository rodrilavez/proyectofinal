@extends('layouts.app')

@section('title', 'Navegación de Vistas')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-center">Navegación de Vistas</h2>

    <!-- Sección de Vistas de Admin -->
    <h3 class="text-2xl font-bold mb-4">Vistas de Admin</h3>
    <ul class="list-disc pl-5 space-y-2">
        <li><a href="{{ route('admin.properties') }}" class="text-blue-600 hover:underline">Gestionar Propiedades</a></li>
        <li><a href="{{ route('admin.interested') }}" class="text-blue-600 hover:underline">Propiedades con Usuarios Interesados</a></li>
        <li><a href="{{ route('admin.properties.interested.show', 1)}}" class="text-blue-600 hover:underline">Usuarios Interesados en una Propiedad</a></li> <!-- Cambia a la ruta correcta si es necesario -->
    </ul>

    <!-- Sección de Vistas de Autenticación (Auth) -->
    <h3 class="text-2xl font-bold mt-8 mb-4">Vistas de Autenticación (Auth)</h3>
    <ul class="list-disc pl-5 space-y-2">
        <li><a href="{{ route('login') }}" class="text-blue-600 hover:underline">Iniciar Sesión</a></li>
        <li><a href="{{ route('register') }}" class="text-blue-600 hover:underline">Registrarse</a></li>
    </ul>

    <!-- Sección de Vistas de Propiedades -->
    <h3 class="text-2xl font-bold mt-8 mb-4">Vistas de Propiedades</h3>
    <ul class="list-disc pl-5 space-y-2">
        <li><a href="{{ route('properties.index') }}" class="text-blue-600 hover:underline">Lista de Propiedades</a></li>
        <li><a href="{{ route('properties.saved') }}" class="text-blue-600 hover:underline">Propiedades Guardadas</a></li>
        <li><a href="{{ route('properties.show', 1) }}" class="text-blue-600 hover:underline">Detalle de Propiedad</a></li>
    </ul>

    <!-- Sección de Vistas de Usuario -->
    <h3 class="text-2xl font-bold mt-8 mb-4">Vistas de Usuario</h3>
    <ul class="list-disc pl-5 space-y-2">
        <li><a href="{{ route('user.profile') }}" class="text-blue-600 hover:underline">Perfil del Usuario</a></li>
        <li><a href="{{ route('user.edit') }}" class="text-blue-600 hover:underline">Editar Perfil</a></li>
        <li><a href="{{ route('landing') }}" class="text-blue-600 hover:underline">Landing Page</a></li>
    </ul>
</div>
@endsection
