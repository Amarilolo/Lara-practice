<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
     public function up(){
        Schema::create('stagiaires',function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('filiere');
            $table->string('status',1);
            $table->date('date_naisance');
            $table->timestamps();
        });
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaire');
    }
};