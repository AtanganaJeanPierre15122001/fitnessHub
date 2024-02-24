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
        Schema::create('dispenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coach');
            $table->string('entrainement');
            $table->foreign('coach')->references('id')->on('coaches')->onDelete('cascade');
            $table->foreign('entrainement')->references('id_ent')->on('entrainements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispenses');
    }
};
