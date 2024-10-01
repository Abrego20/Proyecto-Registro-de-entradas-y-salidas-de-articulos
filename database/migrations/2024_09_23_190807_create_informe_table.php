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
        Schema::create('informes', function (Blueprint $table) {
            $table->id('id_informe');
            $table->bigInteger('id_movimiento')->unsigned();
            $table->foreign('id_movimiento')->references('id_movimiento')->on('movimiento_inventario');
            $table->text('detalle');
            $table->date('fecha_informe');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe');
    }
};
