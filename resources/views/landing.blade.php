<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Century 21</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>  
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        /* Navbar */
        .navbar {
            background-color: black; /* Color negro para el fondo del navbar */
            transition: 0.5s;
        }
        .navbar.scrolled {
            background-color: black; /* Mantener color negro al hacer scroll */
        }
        .navbar a {
            color: white; /* Texto blanco por defecto */
        }
        .navbar a:hover {
            color: #FFCE00; /* Color amarillo en hover */
        }
        /* Botones */
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
</head>
<body class="bg-gray-100 text-gray-800">

   <!-- Header -->
<header class="fixed w-full z-50">
    <nav class="navbar text-white py-4 px-6 flex justify-between items-center">
        <div class="text-2xl font-bold">Century 21</div>
        <ul class="hidden md:flex space-x-6">
            <li><a href="#home">Inicio</a></li>
            <li><a href="{{ route('properties.index')}}">Propiedades</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
        <!-- Botón para Iniciar Sesión / Registrarse -->
        <div class="hidden md:flex space-x-4">
            <a class="btn py-2 px-4 rounded" href="{{ route('login') }}">Iniciar Sesión</a>
            <a class="btn py-2 px-4 rounded" href="{{ route('register') }}">Registrarse</a>
        </div>
        <button class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
    </nav>
</header>

    
<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" id="home" style="background-image: url('https://i.pinimg.com/originals/66/90/81/669081434920a92f113ac54298dfaff2.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold">ENCUENTRA LA CASA DE TUS SUEÑOS</h1>
        <p class="mt-4 text-lg md:text-2xl">Descubre las mejores propiedades en tu área</p>
        <div class="mt-8 w-full max-w-2xl">
        <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Ubicación" type="text" />
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Precio" type="text" />
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Tipo de Propiedad" type="text" />
        <button class="w-full md:w-1/4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ease-in-out focus:bg-white focus:text-black focus:border-blue-600">
            BUSCAR
        </button>
</div>

        </div>
</section>

{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>InmobiliariaCo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>  
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            transition: 0.5s;
        }
        .navbar.scrolled {
            background-color: rgb(0, 0, 0);
        }
        
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

   <!-- Header -->
<header class="fixed w-full z-50">
    <nav class="navbar text-white py-4 px-6 flex justify-between items-center">
        <div class="text-2xl font-bold text-navy-800">InmobiliariaCo</div>
        <ul class="hidden md:flex space-x-6">
            <li><a class="hover:text-navy-800" href="#home">Inicio</a></li>
            <li><a class="hover:text-navy-800" href="{{ route('properties.index')}}">Propiedades</a></li>
            <li><a class="hover:text-navy-800" href="#about">Nosotros</a></li>
            <li><a class="hover:text-navy-800" href="#services">Servicios</a></li>
            <li><a class="hover:text-navy-800" href="#contact">Contacto</a></li>
        </ul>
        <!-- Botón para Iniciar Sesión / Registrarse -->
        <div class="hidden md:flex space-x-4">
            <a class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" href="{{ route('login') }}">Iniciar Sesión</a>
            <a class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" href="{{ route('register') }}">Registrarse</a>
        </div>
        <button class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
    </nav>
</header>

    
    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" id="home" style="background-image: url('https://i.pinimg.com/originals/66/90/81/669081434920a92f113ac54298dfaff2.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-bold">ENCUENTRA LA CASA DE TUS SUEÑOS</h1>
        <p class="mt-4 text-lg md:text-2xl">Descubre las mejores propiedades en tu área</p>
        <div class="mt-8 w-full max-w-2xl">
        <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Ubicación" type="text" />
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Precio" type="text" />
        <input class="w-full md:w-1/3 p-2 border text-black border-gray-300 rounded" placeholder="Tipo de Propiedad" type="text" />
        <button class="w-full md:w-1/4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ease-in-out focus:bg-white focus:text-black focus:border-blue-600">
            BUSCAR
        </button>
</div>

        </div>
    </section> --}}


    
    <!-- Propiedades Destacadas -->
    <section class="py-16 bg-gray-100" id="properties">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Propiedades Destacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="Propiedad de lujo con arquitectura moderna y un hermoso jardín" class="w-full h-48 object-cover" src="https://replicate.delivery/yhqm/dwjMXWKQI0o2Edh0xkPAJlxcvDD203sGyunuPmbTAzbyqG2E/out-0.png"/>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Villa de Lujo</h3>
                        <p class="text-gray-600">$1,200,000</p>
                        <a class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" href="#">Ver Detalles</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="Apartamento moderno con vista a la ciudad y balcón espacioso" class="w-full h-48 object-cover" src="https://replicate.delivery/yhqm/8ZD7gkmaROaONRCLdm5IKQrr5h9tZla5md4ugkYdvwNyqG2E/out-0.png"/>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Apartamento en la Ciudad</h3>
                        <p class="text-gray-600">$850,000</p>
                        <a class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" href="#">Ver Detalles</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img alt="Casa acogedora en suburbio con un gran jardín delantero" class="w-full h-48 object-cover" src="https://replicate.delivery/yhqm/4jJ83zHiW0r8Jd2A0o0tCKeoT3hApMh1NzFklnKo2JNkVNsJA/out-0.png"/>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">Casa Suburbana</h3>
                        <p class="text-gray-600">$650,000</p>
                        <a class="mt-4 inline-block bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" href="#">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Servicios -->
    <section class="py-16 bg-white" id="services">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-home text-4xl text-navy-800 mb-4"></i>
                    <h3 class="text-xl font-semibold">Ventas de Propiedades</h3>
                    <p class="text-gray-600 mt-2">Te ayudamos a encontrar las mejores propiedades para comprar.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-key text-4xl text-navy-800 mb-4"></i>
                    <h3 class="text-xl font-semibold">Alquileres</h3>
                    <p class="text-gray-600 mt-2">Encuentra la propiedad en alquiler perfecta para tus necesidades.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-chart-line text-4xl text-navy-800 mb-4"></i>
                    <h3 class="text-xl font-semibold">Análisis de Mercado</h3>
                    <p class="text-gray-600 mt-2">Obtén información sobre las tendencias del mercado inmobiliario.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Testimonios -->
    <section class="py-16 bg-gray-100" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Lo Que Dicen Nuestros Clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600">"InmobiliariaCo me ayudó a encontrar la casa de mis sueños de manera rápida y sencilla. ¡Su servicio es excelente!"</p>
                    <div class="mt-4 flex items-center">
                        <img alt="Foto del cliente, una persona sonriente" class="w-12 h-12 rounded-full" src="https://replicate.delivery/yhqm/qZe2Re6mvYgXTU0PCam9RxKwfmF0npYCjLYAIjQX0uGZW1wmA/out-0.png"/>
                        <div class="ml-4">
                            <p class="font-semibold">Rodrigo Velazquez</p>
                            <p class="text-gray-500">Comprador</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600">"Encontré la propiedad en alquiler perfecta gracias a InmobiliariaCo. ¡Recomiendo mucho sus servicios!"</p>
                    <div class="mt-4 flex items-center">
                        <img alt="Foto del cliente, una persona feliz" class="w-12 h-12 rounded-full" src="https://replicate.delivery/yhqm/ruYbMTi020LTMJegBDaYX21dXOVcFvaJeieEPDtOTmdXW1wmA/out-0.png"/>
                        <div class="ml-4">
                            <p class="font-semibold">Camila Balderas</p>
                            <p class="text-gray-500">Inquilina</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-600">"Su análisis de mercado me ayudó a tomar decisiones informadas sobre mis inversiones."</p>
                    <div class="mt-4 flex items-center">
                        <img alt="Foto del cliente, una persona satisfecha" class="w-12 h-12 rounded-full" src="https://replicate.delivery/yhqm/RtZPZXBvo0J8J1pkZBdMZ9mJQMmjfimHE7EXMW63bSXmVNsJA/out-0.png"/>
                        <div class="ml-4">
                            <p class="font-semibold">Krishna Herrera</p>
                            <p class="text-gray-500">Inversor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección Sobre Nosotros -->
    <section class="py-16 bg-white" id="about">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Sobre Nosotros</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <img alt="Equipo de oficina trabajando juntos en un espacio moderno" class="w-full rounded-lg shadow-lg" src="https://dl.dropboxusercontent.com/scl/fi/kik5dsj81s5a55yrafgt2/workteam.jpeg?rlkey=jo6signi8nmpcm356b4auparw&st=6bpaib01&dl=0"/>
                </div>
                <div class="md:w-1/2 md:ml-8 mt-8 md:mt-0">
                    <h3 class="text-2xl font-semibold">Nuestra Historia</h3>
                    <p class="text-gray-600 mt-4">InmobiliariaCo fue fundada con la misión de hacer que la compra, venta y alquiler de propiedades sea una experiencia sencilla para todos. Nuestro equipo de profesionales experimentados está dedicado a ofrecer un servicio de primera calidad y asesoramiento experto para ayudarte a encontrar tu casa ideal o propiedad de inversión.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Contacto -->
    <section class="py-16 bg-gray-100" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Contáctanos</h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 md:pr-8">
                    <form class="bg-white rounded-lg shadow-lg p-8">
                        <div class="mb-4">
                            <label class="block text-gray-700" for="name">Nombre</label>
                            <input class="w-full p-2 border border-gray-300 rounded" id="name" type="text"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700" for="email">Correo Electrónico</label>
                            <input class="w-full p-2 border border-gray-300 rounded" id="email" type="email"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700" for="phone">Teléfono</label>
                            <input class="w-full p-2 border border-gray-300 rounded" id="phone" type="text"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700" for="message">Mensaje</label>
                            <textarea class="w-full p-2 border border-gray-300 rounded" id="message"></textarea>
                        </div>
                        <button class="bg-navy-800 text-white py-2 px-4 rounded hover:bg-navy-700" type="submit">Enviar</button>
                    </form>
                </div>
                <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h3 class="text-2xl font-semibold">Nuestra Ubicación</h3>
                        <div class="mt-4">
                        <iframe allowfullscreen="" height="300" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.140224885968!2d-100.44603452475222!3d20.70452968086492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35acbde2fa8cd%3A0x185f39ac76881a6c!2sFacultad%20de%20Inform%C3%A1tica%20UAQ!5e0!3m2!1ses!2smx!4v1725175524939!5m2!1ses!2smx" style="border:0;" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-semibold">InmobiliariaCo</h3>
                    <p class="mt-2">Calle Principal 123, Ciudad Ejemplo, España</p>
                    <p class="mt-2">Correo: info@inmobiliariaco.com</p>
                    <p class="mt-2">Teléfono: (123) 456-7890</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <ul class="flex space-x-4">
                        <li><a class="hover:text-gray-400" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="hover:text-gray-400" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="hover:text-gray-400" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="hover:text-gray-400" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    {{-- </footer>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html> --}} 

<footer class="bg-gray-800 text-white py-8">
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
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>