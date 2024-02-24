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
        Schema::create('constitues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exercice');
            $table->unsignedBigInteger('abonnement');
            $table->foreign('exercice')->references('id')->on('exercices')->onDelete('cascade');
            $table->foreign('abonnement')->references('id')->on('abonnements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constitues');
    }
};
