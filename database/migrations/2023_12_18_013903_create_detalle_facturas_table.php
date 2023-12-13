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
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura');
            $table->foreignId('id_reserva');
            $table->foreignId('id_servicio');
            $table->foreignId('id_producto');
            $table->integer('cantidad');
            $table->decimal('valor');
            $table->foreign('id_factura')->references('id')->on('facturas');
            $table->foreign('id_reserva')->references('id')->on('reservas');
            $table->foreign('id_servicio')->references('id')->on('servicios_adicionales');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_facturas');
    }
};
