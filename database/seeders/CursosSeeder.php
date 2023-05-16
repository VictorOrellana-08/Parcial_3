<?php

namespace Database\Seeders;

use App\Models\cursos;
use App\Models\profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        cursos::create([
            'nombrecurso' => 'Introducción Programación',
            'año' => 2023,
            'ciclo' => 1,
            'idprofesor' => 1,
        ]);
        */

        DB::table('cursos')->insert([
            'nombrecurso' => 'Introducción Software-Hardware',
            'año' => '2023',
            'ciclo' => '2',
            'idprofesor' => 2,
        ]);
    }
}
