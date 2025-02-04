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
        Schema::create('our_sherpa_peak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('our_sherpa_id');
            $table->foreignId('peak_id');
            $table->unsignedBigInteger('order')
                ->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_sherpa_peak');
    }
};
