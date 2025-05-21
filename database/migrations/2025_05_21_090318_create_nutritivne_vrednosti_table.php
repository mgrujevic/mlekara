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
        Schema::create('nutritivne_vrednosti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proizvod_id');
            $table->float('energija')->nullable();
            $table->float('proteini')->nullable();
            $table->float('ugljeni_hidrati')->nullable();
            $table->float('masti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritivne_vrednosti');
    }
};
