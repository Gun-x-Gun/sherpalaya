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
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trek_id')
                ->nullable()
                ->default(null);
            $table->foreignId('tour_id')
                ->nullable()
                ->default(null);
            $table->foreignId('expedition_id')
                ->nullable()
                ->default(null);
            $table->foreignId('peak_id')
                ->nullable()
                ->default(null);
            $table->string('title')
                ->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
