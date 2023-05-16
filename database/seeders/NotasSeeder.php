<?php

namespace Database\Seeders;

use App\Models\notas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        notas::create([
            'nota1' => 10,
            'nota2' => 9,
            'nota3' => 8,
            'nota4' => 9,
            'promedio' => 9,
            'parcial' => 8,
            'idalumno' => 1,
            'idcursos' => 1,
            'idprofesor' => 1,
        ]);
        */

        DB::table('notas')->insert([
            'nota1' => 10,
            'nota2' => 10,
            'nota3' => 10,
            'nota4' => 10,
            'promedio' => 9,
            'parcial' => 9,
            'idalumno' => 2,
            'idcursos' => 2,
            'idprofesor' => 2
        ]);
    }
}
