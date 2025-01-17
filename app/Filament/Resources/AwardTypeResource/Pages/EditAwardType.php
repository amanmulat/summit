<?php

namespace App\Filament\Resources\AwardTypeResource\Pages;

use App\Filament\Resources\AwardTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAwardType extends EditRecord
{
    protected static string $resource = AwardTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
