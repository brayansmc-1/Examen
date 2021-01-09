<?php
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Creacion Usuario',
            'slug'          => 'user.index',
            'description'   => 'creacion de cliente',
        ]);

        Permission::create([
            'name'          => 'Creacion guardar Usuario',
            'slug'          => 'user.store',
            'description'   => 'guardar creacion de cliente',
        ]);
        
        Permission::create([
            'name'          => 'Edición de Usuario',
            'slug'          => 'user.edit',
            'description'   => 'editar un cliente',
        ]);
 
        Permission::create([
            'name'          => 'crear de Usuario',
            'slug'          => 'user.create',
            'description'   => 'Crear un cliente',
        ]);
        

        Permission::create([
            'name'          => 'ver de Usuario',
            'slug'          => 'user.show',
            'description'   => 'ver un cliente',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar Usuario',
            'slug'          => 'user.destroy',
            'description'   => 'Podría eliminar cualquier cliente del sistema',      
        ]);
        
        Permission::create([
            'name'          =>'Vista Cliente',
            'slug'          =>'Clients.show',
            'description'   =>'visualizar cliente'
        ]);

        Permission::create([
            'name'          =>'Crear Cliente',
            'slug'          =>'Clients.create',
            'description'   =>'visualizar cliente'
        ]);

        Permission::create([
            'name'          => 'cliente',
            'slug'          => 'Clients.index',
            'description'   => 'pagina de cliente',
        ]);
        
        Permission::create([
            'name'          => 'Edición de cliente',
            'slug'          => 'Clients.edit',
            'description'   => 'editar un cliente',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar cliente',
            'slug'          => 'Clients.destroy',
            'description'   => 'Podría eliminar cualquier cliente del sistema',      
        ]);

        Permission::create([
            'name'          => 'Crear guardar cliente',
            'slug'          => 'Clients.store',
            'description'   => 'guardar la creacion de un cliente',      
        ]);
    }
}