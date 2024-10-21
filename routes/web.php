<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página principal (Landing Page)
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Rutas para las páginas de autenticación
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Ruta para el perfil del usuario
Route::get('/perfil', function () {
    return view('user.profile');
})->name('user.profile');

// Ruta para editar el perfil del usuario
Route::get('/perfil/editar', function () {
    return view('user.edit');
})->name('user.edit');

// Ruta para la gestión de propiedades (Administrador)
Route::get('/admin/propiedades', function () {
    return view('admin.properties');
})->name('admin.properties');

// Ruta para ver propiedades con interesados (Administrador)
Route::get('/admin/interesados', function () {
    return view('admin.interested');
})->name('admin.interested');

// Ruta para ver detalles de usuarios interesados en una propiedad (Administrador)
Route::get('/admin/interesados/{id}', function ($id) {
    // Simulación de datos para una propiedad
    $property = (object) ['name' => 'Ejemplo de Propiedad'];
    return view('admin.interest_show', compact('property'));
})->name('admin.properties.interested.show');

// Ruta para la página principal de propiedades
Route::get('/propiedades', function () {
    return view('properties.index');
})->name('properties.index');

// Ruta para ver detalles de una propiedad
Route::get('/propiedades/{id}', function ($id) {
    // Simulación de datos para una propiedad
    $property = (object) [
        'name' => 'Propiedad Ejemplo',
        'price' => 250000,
        'location' => 'Ciudad Ejemplo',
        'description' => 'Descripción de la propiedad.',
        'image_url' => 'https://via.placeholder.com/600x400'
    ];
    return view('properties.show', compact('property'));
})->name('properties.show');

// Ruta para propiedades guardadas por el usuario
Route::get('/propiedades-guardadas', function () {
    return view('properties.saved');
})->name('properties.saved');

// Ruta para el panel de navegación de todas las vistas
Route::get('/navegacion', function () {
    return view('navigation');
})->name('navigation');

Route::get('/admin/interesados/{id}', function ($id) {
    // Simulación de una propiedad con usuarios interesados
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
    return view('admin.interest_show', compact('property'));
})->name('admin.properties.interested.show');

// Ruta para ver el detalle de una propiedad
Route::get('/propiedades/{id}', function ($id) {
    // Simulación de una propiedad
    $property = (object) [
        'id' => $id,
        'name' => 'Propiedad Ejemplo ' . $id,
        'price' => 350000,
        'location' => 'Querétaro, México',
        'description' => 'Una hermosa propiedad en el corazón de Querétaro con vistas increíbles y amplio espacio.',
        'image_url' => 'https://via.placeholder.com/800x600'
    ];
    
    return view('properties.show', compact('property'));
})->name('properties.show');

// Ruta para agregar una nueva propiedad
Route::get('/admin/propiedades/crear', function () {
    return view('admin.create_property'); // Asegúrate de que esta vista exista
})->name('admin.properties.create');
