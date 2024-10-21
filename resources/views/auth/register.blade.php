@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Registrarse</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Nombre</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="name" name="name" type="text" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="gender">Sexo</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="gender" name="gender" required>
                    <option value="">Selecciona tu sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="birth_date">Fecha de Nacimiento</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="birth_date" name="birth_date" type="date" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="email">Correo Electrónico</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="email" name="email" type="email" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="phone">Número de Teléfono</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="phone" name="phone" type="text" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Contraseña</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="password" name="password" type="password" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password_confirmation">Confirmar Contraseña</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="password_confirmation" name="password_confirmation" type="password" required/>
            </div>
            <button class="w-full bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" type="submit">Registrarse</button>
            <div class="mt-4 text-center">
                <a class="text-blue-600 hover:underline" href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia Sesión</a>
            </div>
        </form>
    </div>
</div>
@endsection
