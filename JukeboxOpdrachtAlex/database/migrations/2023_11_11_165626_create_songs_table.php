<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('Artiest_Band');
            $table->unsignedBigInteger('genre_id');
            $table->integer('Duur');
            $table->timestamps();


            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
