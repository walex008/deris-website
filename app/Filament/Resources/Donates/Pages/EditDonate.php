<?php

namespace App\Filament\Resources\Donates\Pages;

use App\Filament\Resources\Donates\DonateResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDonate extends EditRecord
{
    protected static string $resource = DonateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
