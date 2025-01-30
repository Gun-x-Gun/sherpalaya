<?php

namespace App\Filament\Resources\WebsiteSettingResource\Pages;

use App\Enums\WebsiteSettingType;
use App\Filament\Resources\WebsiteSettingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteSetting extends EditRecord
{
    protected static string $resource = WebsiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        WebsiteSettingResource::$websiteSettingTypeBeingUpdated = WebsiteSettingType::tryFrom($data['type']);
        return $data;
    }
}
