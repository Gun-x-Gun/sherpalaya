<?php

namespace App\Filament\Resources\WebsiteSettingResource\Actions;

use Filament\Support\Actions\Concerns\CanCustomizeProcess;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class ResetAction extends Action
{

    // public static function getDefaultName(): ?string
    // {
    //     return 'reset';
    // }

    // protected function setUp(): void
    // {
    //     parent::setUp();

    //     $this->label('Reset to Default');

    //     // $this->modalHeading( 'Reset setting value to default: ' . $this->getRecordTitle() );
    //     $this->modalButton('Yes, reset them');

    //     // $this->modalSubheading('Are you sure you\'d like to reset values these settings to default? This cannot be undone.');
    //     $this->successNotificationTitle('Values reset to default');


    //     $this->color('danger');
    //     $this->requiresConfirmation();

    //     $this->action(function (): void {
    //         $result = $this->process(
    //             static fn(Model $record) => $record->update([
    //                 'value' => $record->default_value
    //             ])
    //         );

    //         if(!$result)
    //         {
    //             $this->failure();
    //             return;
    //         }

    //         $this->success();
    //     });

    // }
}
