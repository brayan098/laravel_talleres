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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cuidad', 100);
            $table->string('direccion', 255);
            $table->string('telefono', 20)->nullable();
            $table->string('email', 100);
            $table->string('contrasena', 255)->nullable();
            $table->boolean('activo');
            $table->decimal('salario_inicial',20,2);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
