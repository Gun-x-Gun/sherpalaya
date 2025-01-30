<?php

namespace App\Filament\Resources\WebsiteSettingResource\Actions;

use Filament\Support\Actions\Concerns\CanCustomizeProcess;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ResetBulkAction extends BulkAction
{

    // use CanCustomizeProcess;

    // public static function getDefaultName(): ?string
    // {
    //     return 'reset';
    // }

    // protected function setUp(): void
    // {
    //     parent::setUp();

    //     $this->label('Reset to Default');

    //     $this->successNotificationTitle('Values reset to default');

    //     $this->action(function (): void {
    //         $this->process(
    //             static fn(Collection $records) => $records->each(
    //                 fn(Model $record) => $record->update([
    //                     'value' => $record->default_value
    //                 ])
    //             )
    //         );

    //         $this->success();
    //     });

    //     $this->deselectRecordsAfterCompletion()
    //         ->color('danger')
    //         ->requiresConfirmation()
    //         ->modalHeading('Reset setting value to default')
    //         ->modalSubheading('Are you sure you\'d like to reset values these settings to default? This cannot be undone.')
    //         ->modalButton('Yes, reset them');
    // }
}
