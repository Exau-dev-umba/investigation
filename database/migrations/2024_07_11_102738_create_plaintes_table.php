<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->integer('num_ordre');
            $table->dateTime('date_pub_rapport_enquete');
            //$table->string('reference');
            $table->string('type_cas');
            $table->unsignedBigInteger('enquete_id');
            $table->foreign('enquete_id')->references('id')->on('enquetes')->onDelete('cascade');
            $table->string('noms');
            $table->string('statut');
            $table->string('evidences', 255);
            $table->integer('nbr_jours_passe_sla');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plaintes');
    }
};
