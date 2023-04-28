<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_salarier');
            $table->foreign('id_salarier')->references('id')->on('salariers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nomSociéte');
            $table->string('adresseSociéte');
            $table->date('dateDepart')->format('d/m/Y');
            $table->date('dateFinale')->format('d/m/Y');
            $table->timestamps();
        });
    }    

    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};