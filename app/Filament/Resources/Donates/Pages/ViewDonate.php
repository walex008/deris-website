<?php

namespace App\Filament\Resources\Donates\Pages;

use App\Filament\Resources\Donates\DonateResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDonate extends ViewRecord
{
    protected static string $resource = DonateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
