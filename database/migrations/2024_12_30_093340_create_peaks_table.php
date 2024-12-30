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
        Schema::create('peaks', function (Blueprint $table) {
            $table->id();
            $table->string('title')
                ->required();
            $table->longText('description')
                ->required();
            $table->timestamps();
        });
        CuratorMigrationHelper::migrateMediaField('peaks', 'cover_image_id');
        CuratorMigrationHelper::migrateMediaField('peaks', 'feature_image_id');

        CuratorMigrationHelper::migratePivotTable('media_peak', 'peak_id');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        CuratorMigrationHelper::rollbackPivotTable('media_peak');

        CuratorMigrationHelper::rollbackMediaField('peaks', 'feature_image_id');
        CuratorMigrationHelper::rollbackMediaField('peaks', 'cover_image_id');
        Schema::dropIfExists('peaks');
    }
};
