<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\alumno;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        alumno::create( 
            [
                'nombre' => 'Víctor',
                'apellido' => 'Orellana',
                'fechanacimiento' => '2000-01-01',
                'direccion' => 'Zacatecoluca',
                'genero' => 'Masculino',
                'telefono' => '1234-6789',
                'correo' => 'orellana@gmail.com',
                'clave' => 'ABC_123456',
            ],
            [
                'nombre' => 'Manuel',
                'apellido' => 'Quijada',
                'fechanacimiento' => '2010-01-01',
                'direccion' => 'La Libertad',
                'genero' => 'Masculino',
                'telefono' => '5489-2378',
                'correo' => 'quijadaMan@gmail.com',
                'clave' => 'fneifuecnifefni',
            ]
        );
        */

        DB::table('alumnos')->insert([
            'nombre' => 'Víctor Manuel',
            'apellido' => 'Orellana Quijada',
            'fechanacimiento' => '2000-01-01',
            'direccion' => 'Zacatecoluca, La Paz',
            'genero' => 'Masculino',
            'telefono' => '7632-9161',
            'correo' => 'victorManuel@yahoo.com',
            'clave' => 'ABC_1234567'
        ]);
    }
}
