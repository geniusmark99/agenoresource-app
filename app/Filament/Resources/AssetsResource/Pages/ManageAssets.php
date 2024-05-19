<?php

namespace App\Filament\Resources\AssetsResource\Pages;

use App\Filament\Resources\AssetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAssets extends ManageRecords
{
    protected static string $resource = AssetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
