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
        Schema::create('enquetes', function (Blueprint $table) {
            $table->id();
            $table->integer('num_ordre');
            $table->dateTime('date_reception');
            //$table->string('provenance');
            $table->unsignedBigInteger('provenance_id');
            $table->foreign('provenance_id')->references('id')->on('alerteurs')->onDelete('cascade');
            $table->string('categorie');
            $table->string('entites_concernes');
            $table->string('type_cas');
            $table->boolean('repete');
            $table->string('libele',255);
            $table->boolean('avere');
            $table->dateTime('date_demarrage');
            $table->string('status');
            $table->string('commentaires');
            $table->string('enqueteur');
            $table->string('priorite');
            $table->string('montant_init_impact_financier');
            $table->string('montant_reel_impact_financier');
            $table->string('montant_recouvrir');
            $table->dateTime('date_prevision_pub_rapport');
            $table->dateTime('date_final_pub_rapport');
            $table->dateTime('date_diffusion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquetes');
    }
};