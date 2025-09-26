<?php

namespace App\Filament\Resources\Footers\Pages;

use App\Filament\Resources\Footers\FooterResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFooter extends EditRecord
{
    protected static string $resource = FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
