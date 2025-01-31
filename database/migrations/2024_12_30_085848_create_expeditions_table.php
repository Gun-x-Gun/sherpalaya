<?php

use App\Helpers\CuratorMigrationHelper;
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
        Schema::create('expeditions', function (Blueprint $table) {
            $table->id();
            $table->string('title')
                ->required();
            $table->longText('description')
                ->required();
            $table->string('duration')
                ->required();
            $table->foreignId('region_id');
            $table->string('grade')
                ->nullable()
                ->default(null);
            $table->string('starting_point')
                ->required();
            $table->string('ending_point')
                ->required();
            $table->string('best_time_for_expedition')
                ->required();
            $table->unsignedSmallInteger('starting_altitude')
                ->required();
            $table->unsignedSmallInteger('highest_altitude')
                ->required();
            $table->string('expedition_difficulty')
                ->nullable()
                ->default(null);
            $table->longText('costs_include');
            $table->longText('costs_exclude');
            $table->boolean('is_featured');
            $table->timestamps();
        });
        CuratorMigrationHelper::migrateMediaField('expeditions', 'cover_image_id');
        CuratorMigrationHelper::migrateMediaField('expeditions', 'feature_image_id');

        CuratorMigrationHelper::migratePivotTable('expedition_media', 'expedition_id');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        CuratorMigrationHelper::rollbackPivotTable('expedition_media');

        CuratorMigrationHelper::rollbackMediaField('expeditions', 'feature_image_id');
        CuratorMigrationHelper::rollbackMediaField('expeditions', 'cover_image_id');
        Schema::dropIfExists('expeditions');
    }
};
