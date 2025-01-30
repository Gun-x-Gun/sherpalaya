<?php
namespace App\Filament\Fields;

use Awcodes\Curator\Components\Forms\CuratorPicker as FormsCuratorPicker;
use Filament\Forms\Components\Actions\Action;

class CuratorPicker extends FormsCuratorPicker
{
    public function getPickerAction(): Action
    {
        return parent::getPickerAction()
            ->visible(function(string $operation){
                // dd($operation);
                return $operation != 'view';
            });
    }
}
