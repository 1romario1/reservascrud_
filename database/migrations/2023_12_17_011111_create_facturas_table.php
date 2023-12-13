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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente');
            $table->date('fecha_factura');
            $table->decimal('porcentaje_impuesto');
            $table->decimal('descuento');
            $table->decimal('total');
            $table->foreignId('id_reserva');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_reserva')->references('id')->on('reservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
