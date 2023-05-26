<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reglements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_fournisseur')->references('id')->on('fournisseurs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('num');
            $table->integer('montant');
            $table->date('date');
            $table->string('type');
            $table->string('reglement');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reglements');
    }
};