<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_devis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->string("article");
            $table->float('qte');
            $table->string("unite");
            $table->float("pu");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_devis');
    }
};