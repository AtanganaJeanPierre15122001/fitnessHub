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
        Schema::create('enseignes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coach');
            $table->unsignedBigInteger('horaire');
            $table->foreign('coach')->references('id')->on('coaches')->onDelete('cascade');
            $table->foreign('horaire')->references('id')->on('horaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignes');
    }
};
