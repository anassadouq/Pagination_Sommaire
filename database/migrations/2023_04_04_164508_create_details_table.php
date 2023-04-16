<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('position');
            $table->integer('hauteur');
            $table->integer('largeur');
            $table->integer('profondeur');
            $table->integer('qte');
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
