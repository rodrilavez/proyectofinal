<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title') - Century 21</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>  
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        /* Estilos del navbar */
        .navbar {
            background-color: black; /* Color negro para el fondo del navbar */
        }
        /* Estilos para los enlaces del navbar */
        .navbar a {
            color: white; /* Texto blanco por defecto */
        }
        .navbar a:hover {
            color: #FFCE00; /* Color amarillo en hover */
        }
        /* Estilos para los botones */
        .btn {
            background-color: #FFCE00; /* Color amarillo brillante */
            color: black; /* Texto negro */
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3; /* Color azul al hacer hover en los botones */
            color: white; /* Texto blanco al hacer hover */
        }
    </style>
    @yield('head')
</head>
<body class="bg-gray-100 text-gray-800">

   <!-- Header -->
<header class="fixed w-full z-50">
    <nav class="navbar text-white py-4 px-6 flex justify-between items-center">
        <div class="text-2xl font-bold">Century 21</div>
        <ul class="hidden md:flex space-x-6">
            <li><a href="{{ route('landing') }}">Inicio</a></li>
            <li><a href="{{ route('properties.index')}}">Propiedades</a></li>
            @auth
                <li><a href="{{ route('user.profile') }}">Perfil</a></li>
                @if(auth()->user()->is_admin)
                    <li><a href="{{ route('admin.properties') }}">Administrar</a></li>
                @endif
            @endauth
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
        <!-- Botón para Iniciar Sesión / Registrarse o Cerrar Sesión -->
        <div class="hidden md:flex space-x-4">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn py-2 px-4 rounded">Cerrar Sesión</button>
                </form>
            @else
                <a class="btn py-2 px-4 rounded" href="{{ route('login') }}">Iniciar Sesión</a>
                <a class="btn py-2 px-4 rounded" href="{{ route('register') }}">Registrarse</a>
            @endauth
        </div>
        <button class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
    </nav>
</header>

<!-- Contenido Principal -->
<div class="pt-20">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8 mt-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left">
                <h3 class="text-xl font-semibold">Facultad de Informática - UAQ</h3>
                <p class="mt-2">Campus Cerro de las Campanas, C.P. 76010</p>
                <p class="mt-2">Querétaro, México</p>
                <p class="mt-2">Correo: informes@fi.uaq.mx</p>
                <p class="mt-2">Teléfono: (442) 192-1200 ext. 5400</p>
            </div>
            <div class="mt-4 md:mt-0">
                <ul class="flex space-x-4">
                    <li><a class="hover:text-yellow-500" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="hover:text-yellow-500" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="hover:text-yellow-500" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="hover:text-yellow-500" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@yield('scripts')
</body>
</html>
