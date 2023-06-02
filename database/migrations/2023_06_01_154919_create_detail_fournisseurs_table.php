<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_fournisseur')->references('id')->on('fournisseurs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('code');
            $table->string('designation');
            $table->float('qte');
            $table->float('pu');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_fournisseurs');
    }
};