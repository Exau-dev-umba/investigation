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
        Schema::create('sanctions', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('agent');
            $table->string('statut_sanction');
            //$table->unsignedBigInteger('type_sanction_id');
            //$table->unsignedBigInteger('categorie_sanction_id');
            //$table->unsignedBigInteger('motif_sanction_id');
            //$table->unsignedBigInteger('employeur_id');
            //$table->unsignedBigInteger('enquete_id');
            //$table->unsignedBigInteger('recommandation_id');
            $table->foreignId('enquete_id')->references('id')->on('enquetes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('categorie_sanction_id')->references('id')->on('categorie_sanctions')->onDelete('restrict')->onUpdate('restrict');            $table->foreignId('type_sanction_id')->references('id')->on('type_sanctions')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('employeur_id')->references('id')->on('employeurs')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('motif_sanction_id')->references('id')->on('motif_sanctions')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nbr_jour_pub_rapport');
            $table->string('fontion_agent');
            $table->dateTime('date_pub_rh');
            $table->dateTime('date_envoie_demande_exlp');
            $table->dateTime('date_reception_demande_exlp');
            $table->dateTime('date_sanction');
            $table->string('evidences');
            $table->string('nbr_jours_passe_sla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanctions');
    }
};
