<?php

namespace App\Filament\Resources\HighlightSections\Pages;

use App\Filament\Resources\HighlightSections\HighlightSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHighlightSection extends EditRecord
{
    protected static string $resource = HighlightSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
