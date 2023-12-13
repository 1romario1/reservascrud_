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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->foreignId('id_estado');
            $table->foreignId('id_tipo');
            $table->decimal('tarifa');
            $table->integer('capacidad');
            $table->foreign('id_estado')->references('id')->on('estado_habitaciones');
            $table->foreign('id_tipo')->references('id')->on('tipo_habitaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
