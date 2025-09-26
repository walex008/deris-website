<?php

namespace App\Filament\Resources\Taglines\Pages;

use App\Filament\Resources\Taglines\TaglineResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTagline extends ViewRecord
{
    protected static string $resource = TaglineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
