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
        Schema::create('carros_trabalho', function (Blueprint $table) {
            $table->id();
            $table->string('marca', '50');
            $table->string('modelo', '50');
            $table->string('cor', '50');
            $table->string('ano_fabricacao', '50');
            $table->string('quilometragem', '50');
            $table->string('valor', '50');
            $table->text('detalhes');
            $table->text('img1')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros_trabalho');
    }
};
