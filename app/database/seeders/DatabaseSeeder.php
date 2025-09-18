<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hub;
use App\Models\Role;
use App\Models\DocumentType;
use App\Models\Category;
use App\Models\Item;
use App\Models\Request;
use App\Models\Movement;
use App\Models\ItemType;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        
        
        // User::factory(10)->create();
        DB::table('hubs')->insert([
            ['name' =>  'Centro de Procesos Industriales y Construcción'],
            ['name' =>  'Centro de Automatización Industrial'],
            ['name' =>  'Centro de Comercio y Servicios'],
            ['name' =>  'Centro de para la Formación Cafetera'],
            ['name' =>  'Centro Pecuario y Agroempresarial'],
        ]);

        DB::table('item_types')->insert([
            ['type' =>  'consumible'],
            ['type' =>  'equipo'],
        ]);

        DB::table('roles')->insert([
            ['name' =>  'administrador'],
            ['name' =>  'funcionario'],

        ]);

        DB::table('document_types')->insert([
            ['type' =>  'cédula de ciudadanía', 'acronym'=>'CC'],
            ['type' =>  'tarjeta de identidad', 'acronym'=>'TI'],
            ['type' =>  'cédula de extranjería', 'acronym'=>'CE'],
            ['type' =>  'pasaporte', 'acronym'=>'PP'],
            ['type' =>  'permiso especial de permanencia', 'acronym'=>'PEP']

        ]);

        User::create([
            'name' => 'Admin Test',
            'document' => '1000000000',
            'email' => 'admin@test.com',
            'password' => 'admin', // encripta la clave
            'phone' => '3000000000',
            'hub_id' => 1,
            'document_type_id' => 1,
            'role_id' => 1,
        ]);
    }
}
