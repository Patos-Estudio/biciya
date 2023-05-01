<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'John Doe',
            'apellido' => 'aguirre ',
            'cedula' => '1055760067',
            'email' => 'johndoe@example.com',
            'contraseña' => Hash::make('contraseña'),
            'created_at' => now(),
            'updated_at' => now()
        ]);   
        
    }
}
