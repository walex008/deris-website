<?php

namespace App\Filament\Resources\Taglines\Pages;

use App\Filament\Resources\Taglines\TaglineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTaglines extends ListRecords
{
    protected static string $resource = TaglineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
