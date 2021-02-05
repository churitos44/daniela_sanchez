<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Rol;
use \App\Models\Usuario;
use \App\Models\Configuration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
         \App\Models\Usuario::factory(10)->create();
         \App\Models\Role::factory(10)->create();
         \App\Models\Configuration::factory(10)->create();
         
         $this->call(UsersRoleSeeder::class);
    }
}