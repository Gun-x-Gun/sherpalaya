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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title')
                ->required();
            $table->string('type')
                ->required();
            $table->longText('description')
                ->required();
            $table->boolean('is_featured');
            $table->timestamps();
        });
        CuratorMigrationHelper::migrateMediaField('tours', 'cover_image_id');
        CuratorMigrationHelper::migrateMediaField('tours', 'feature_image_id');

        CuratorMigrationHelper::migratePivotTable('media_tour', 'tour_id');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        CuratorMigrationHelper::rollbackPivotTable('media_tour');

        CuratorMigrationHelper::rollbackMediaField('tours', 'feature_image_id');
        CuratorMigrationHelper::rollbackMediaField('tours', 'cover_image_id');
        Schema::dropIfExists('tours');
    }
};
