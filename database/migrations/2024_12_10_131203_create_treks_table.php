<?php

use App\Helpers\CuratorMigrationHelper;
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
            // $table->string('cover_image')
            //     ->required();
            $table->longText('description')
                ->required();
            $table->string('duration')
                ->required();
            $table->string('grade')
                ->nullable()
                ->default(null);
            // $table->longText('destinations')
            //     ->required();
            $table->string('starting_ending_point')
                ->required();
            $table->string('best_time_for_trek')
                ->required();
            $table->string('starting_altitude')
                ->required();
            $table->string('highest_altitude')
                ->required();
            $table->string('trek_difficulty')
                ->nullable()
                ->default(null);
            $table->longText('key_highlights')
                ->required();
            $table->longText('costs_include')
                ->required();
            $table->longText('costs_exclude')
                ->required();
            $table->longText('essential_tips')
                ->required();
            $table->timestamps();
        });

        CuratorMigrationHelper::migrateMediaField('treks', 'cover_image_id');
        CuratorMigrationHelper::migrateMediaField('treks', 'feature_image_id');

        CuratorMigrationHelper::migratePivotTable('media_trek', 'trek_id');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        CuratorMigrationHelper::rollbackPivotTable('media_trek');

        CuratorMigrationHelper::rollbackMediaField('treks', 'feature_image_id');
        CuratorMigrationHelper::rollbackMediaField('treks', 'cover_image_id');
        Schema::dropIfExists('treks');
    }
};
