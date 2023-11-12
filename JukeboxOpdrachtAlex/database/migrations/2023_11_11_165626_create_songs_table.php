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
        Schema::create('songs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('Naam'); // Naam van het liedje
            $table->string('Artiest_Band'); // Naam van de artiest of band
            $table->unsignedBigInteger('genre_id'); // Foreign key naar genres tabel toe
            $table->integer('Duur'); // Duur van het liedje
            $table->timestamps();

            // Definieert de foreign key constraint
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
