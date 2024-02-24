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
        Schema::create('entrainements', function (Blueprint $table) {

            $table->string('id_ent')->primary();
            $table->string('nom_ent');
            $table->string('secteur');
            $table->foreign('secteur')->references('id_secteur')->on('secteurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrainements');
    }
};
