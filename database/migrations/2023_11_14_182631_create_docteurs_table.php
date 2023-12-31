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
        Schema::create('docteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_doc');
            $table->string('prenom_doc');
            $table->string('adresse');
            $table->integer('telephone');
            $table->string('email');
            $table->unsignedBigInteger("specialites_id");
            $table->foreign('specialites_id')->references('id')->on('specialités')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docteurs');
    }
};
