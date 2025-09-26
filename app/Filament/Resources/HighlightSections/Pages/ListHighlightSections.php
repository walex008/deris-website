<?php

namespace App\Filament\Resources\HighlightSections\Pages;

use App\Filament\Resources\HighlightSections\HighlightSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHighlightSections extends ListRecords
{
    protected static string $resource = HighlightSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
