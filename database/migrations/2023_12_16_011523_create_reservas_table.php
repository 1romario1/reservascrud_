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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente');
            $table->date('fecha_reserva');
            $table->integer('cantidad_habit');
            $table->integer('adultos');
            $table->integer('niños');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('valor');
            $table->foreignId('id_estado');
            $table->foreignId('metodo_pago');
            $table->foreign('metodo_pago')->references('id')->on('metodo_pagos');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_estado')->references('id')->on('estado_reservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
