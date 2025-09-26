<?php

namespace App\Filament\Resources\HighlightSections\Pages;

use App\Filament\Resources\HighlightSections\HighlightSectionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHighlightSection extends ViewRecord
{
    protected static string $resource = HighlightSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
