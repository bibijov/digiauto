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
        Schema::create('kvizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->integer('korisnik_id');
            $table->integer('autoskola_id');
            $table->string('opis');
            $table->string('pitanje_1');
            $table->string('odgovor_1');
            $table->string('pitanje_2');
            $table->string('odgovor_2');
            $table->string('pitanje_3');
            $table->string('odgovor_3');
            $table->string('pitanje_4');
            $table->string('odgovor_4');
            $table->string('pitanje_5');
            $table->string('odgovor_5');
            $table->string('pitanje_6');
            $table->string('odgovor_6');
            $table->string('pitanje_7');
            $table->string('odgovor_7');
            $table->string('pitanje_8');
            $table->string('odgovor_8');
            $table->string('pitanje_9');
            $table->string('odgovor_9');
            $table->string('pitanje_10');
            $table->string('odgovor_10');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kvizs');
    }
};
