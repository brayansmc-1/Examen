<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        talento\User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345')
        ]);

        talento\User::create([
            'name'      => 'vendedor',
            'email'     => 'vendedor@gmail.com',
            'password'  => bcrypt('12345')
        ]);

        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' 	=> 'all-access'
        ]);
        Role::create([
        	'name' 		=> 'Vendedor',
        	'slug' 		=> 'vendedor',
        ]);
        Role::create([
        	'name' 		=> 'Cliente',
        	'slug' 		=> 'client',
        ]);
        
    }
}
