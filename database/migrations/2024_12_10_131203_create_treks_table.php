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
        Schema::create('treks', function (Blueprint $table) {
            $table->id();
            $table->string('title')
                ->required();
            $table->string('cover_image')
                ->required();
            $table->longText('description')
                ->required();
            $table->string('duration')
                ->required();
            $table->string('grade')
                ->nullable()
                ->default(null);
            $table->longText('destinations')
                ->required();
            $table->string('starting_ending_point')
                ->required();
            $table->string('best_time_for_trek')
                ->required();
            $table->string('starting_altitude')
                ->required();
            $table->string('highest_altitude')
                ->required();
            $table->string('trek_difficulty')
                ->required();
            $table->longText('key_highlights')
                ->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treks');
    }
};
