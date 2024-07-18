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
        Schema::create('sanction_enquete', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->unsignedBigInteger('enquete_id');
            $table->unsignedBigInteger('sanction_id');
            $table->foreign('enquete_id')->references('id')->on('enquetes')->onDelete('cascade');
            $table->foreign('sanction_id')->references('id')->on('sanctions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanction_enquete');
    }
};