<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->integer('id')->default(1);
            $table->id('codigo_unico');
            $table->unsignedBigInteger('Numero_orden');
            $table->foreign('Numero_orden')
                ->references('Numero_orden') /* campo de referencia */
                ->on('orden_contractuals') /* tabla de referencia */
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bienes');
    }
};