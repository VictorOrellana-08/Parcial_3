<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('idcursos');
            $table->string('nombrecurso');
            $table->integer('año');
            $table->integer('ciclo');
            $table->unsignedBigInteger('idprofesor');
            $table->timestamps();

            $table->foreign('idprofesor')->references('idprofesor')->on('profesors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
