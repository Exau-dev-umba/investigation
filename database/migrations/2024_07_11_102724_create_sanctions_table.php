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
            $table->integer('num_ordre');
            $table->string('reference');
            $table->string('agent');
            $table->string('statut_sanction');
            $table->string('type_sanction');
            $table->string('motif_sanction');
            $table->string('employeur');
            $table->string('nbr_jour_pub_rapport');
            $table->string('fontion_agent');
            $table->string('categorie');
            $table->string('type_cas');
            $table->string('type_cas');
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
