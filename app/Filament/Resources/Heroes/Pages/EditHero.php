<?php

namespace App\Filament\Resources\Heroes\Pages;

use App\Filament\Resources\Heroes\HeroResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
