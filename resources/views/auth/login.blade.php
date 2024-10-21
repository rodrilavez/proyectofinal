@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>
        <!-- Elimina la acción para que no se envíe a ninguna ruta -->
        <form method="POST" action="#">
            <!-- @csrf No es necesario incluir esto si no vas a usar lógica -->
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Correo Electrónico</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" required autofocus/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Contraseña</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="password" name="password" type="password" required/>
            </div>
            <div class="mb-4 flex items-center">
                <input class="mr-2 leading-tight" id="remember" name="remember" type="checkbox">
                <label class="text-sm text-gray-700" for="remember">Recuérdame</label>
            </div>
            <button class="w-full bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" type="submit">Iniciar Sesión</button>
            <div class="mt-4 text-center">
                <a class="text-blue-600 hover:underline" href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</div>
@endsection



{{-- @extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Correo Electrónico</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" required autofocus/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Contraseña</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="password" name="password" type="password" required/>
            </div>
            <div class="mb-4 flex items-center">
                <input class="mr-2 leading-tight" id="remember" name="remember" type="checkbox">
                <label class="text-sm text-gray-700" for="remember">Recuérdame</label>
            </div>
            <button class="w-full bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" type="submit">Iniciar Sesión</button>
            <div class="mt-4 text-center">
                <a class="text-blue-600 hover:underline" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</div>
@endsection --}}
