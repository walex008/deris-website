<?php

namespace App\Filament\Resources\PointLists\Pages;

use App\Filament\Resources\PointLists\PointListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPointLists extends ListRecords
{
    protected static string $resource = PointListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
