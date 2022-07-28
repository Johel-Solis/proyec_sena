<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_horas');
            $table->foreignId('periodo_academico_id')->references('id')->on('periodo_academicos')->onDelete('cascade');
            $table->foreignId('competencia_id')->references('id')->on('competencias')->onDelete('cascade');
            $table->foreignId('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreignId('ambiente_id')->references('id')->on('ambientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
