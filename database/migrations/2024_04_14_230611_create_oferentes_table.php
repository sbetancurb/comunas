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
        Schema::create('oferentes', function (Blueprint $table) {
            $table->id();
            $table->string("comuna");
            $table->string("nombre");
            $table->string("obra");
            $table->integer("valorContrato");
            $table->string("escenarioAprobado");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferentes');
    }
};
