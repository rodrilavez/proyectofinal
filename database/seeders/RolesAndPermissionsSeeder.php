<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        
        // Resetear cache de permisos y roles
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear permisos
        Permission::create(['name' => 'ver propiedades']);
        Permission::create(['name' => 'crear propiedades']);
        Permission::create(['name' => 'editar propiedades']);
        Permission::create(['name' => 'eliminar propiedades']);

        // Crear roles y asignar permisos
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $agente = Role::create(['name' => 'agente']);
        $agente->givePermissionTo(['ver propiedades', 'crear propiedades', 'editar propiedades']);

        $cliente = Role::create(['name' => 'cliente']);
        $cliente->givePermissionTo('ver propiedades');
    }
}
