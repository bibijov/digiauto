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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('korisnik_id');
            $table->integer('autoskola_id');
            $table->integer('instruktor_id');
            $table->string('polozenateorija');
            $table->integer('brojcasovavoznje');
            $table->integer('brojnocnihvoznji');
            $table->string('brojtelefona');
            $table->integer('brojkredita');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
