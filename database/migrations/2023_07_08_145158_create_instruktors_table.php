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
        Schema::create('instruktors', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->integer('korisnik_id');
            $table->integer('autoskola_id');
            $table->string('auto');
            $table->string('brojtelefona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruktors');
    }
};
