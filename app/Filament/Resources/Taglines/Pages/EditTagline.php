<?php

namespace App\Filament\Resources\Taglines\Pages;

use App\Filament\Resources\Taglines\TaglineResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTagline extends EditRecord
{
    protected static string $resource = TaglineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
