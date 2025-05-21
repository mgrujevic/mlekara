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
        Schema::create('proizvodi', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->text('opis')->nullable();
            $table->decimal('cena', 8, 2);
            $table->boolean('istaknut')->default(false);
            $table->string('slika')->nullable();
            $table->foreignId('kategorija_id')->constrained('kategorije_proizvoda');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proizvodi');
    }
};
