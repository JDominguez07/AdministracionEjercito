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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->String('Nom_s');
            $table->String('Apell_s');
            $table->String('Grado_s');
            $table->foreignId('army_corps_id')->constrained('army_corps');
            $table->foreignId('companies_id')->constrained('companies');
            $table->foreignId('barracks_id')->constrained('barracks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
