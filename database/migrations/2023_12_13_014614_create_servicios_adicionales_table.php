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
        Schema::create('servicios_adicionales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_servicio');
            $table->decimal('valor');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_adicionales');
    }
};
