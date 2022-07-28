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
        Schema::create('docentes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->enum('tipo_documento',['Cedula Extranjeria','Visa','Pasaporte','Cedula']);
            $table->string('area');
            $table->enum('tipo_docente',['Técnico','profesional']);
            $table->enum('tipo_contrato', ['PT', 'CNT']);
            $table->string('estado');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('docentes');
    }
};
