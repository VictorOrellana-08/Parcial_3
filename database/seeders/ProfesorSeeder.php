<?php

namespace Database\Seeders;

use App\Models\profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    /*
        profesor::create(
            [
                'nombre' => 'Christopher',
                'apellido' => 'Barahona',
                'dui' => '12345678-9',
                'telefono' => '987654321',
                'email' => 'barahona@yahoo.com',
                'clave' => '654321_ABC',
            ],
            [
                'nombre' => 'Walter',
                'apellido' => 'Hernandez',
                'dui' => '56978745-9',
                'telefono' => '5274-9685',
                'email' => 'hernadez@yahoo.com',
                'clave' => 'walter_oq0fienfienfie',
            ]
        );
        */


        DB::table('profesors')->insert([
            'nombre' => 'Lisandro',
            'apellido' => 'Roderzo',
            'dui' => '56247892-4',
            'telefono' => '9625-4178',
            'email' => 'lisandro@yahoo.com',
            'clave' => 'Rodezo154_abc'
        ]);

    }
}
