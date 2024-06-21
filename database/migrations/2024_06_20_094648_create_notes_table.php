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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->decimal('Arab_note', 4, 2); 
            $table->decimal('Math_note', 4, 2); // Precision of 4, scale of 2
            $table->decimal('SVT_note', 4, 2); // Precision of 4, scale of 2
            $table->unsignedBigInteger('stagiaireID');
            $table->foreign('stagiaireID')->references('id')->on('stagiaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};