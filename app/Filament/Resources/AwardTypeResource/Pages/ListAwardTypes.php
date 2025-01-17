<?php

namespace App\Filament\Resources\AwardTypeResource\Pages;

use App\Filament\Resources\AwardTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAwardTypes extends ListRecords
{
    protected static string $resource = AwardTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
