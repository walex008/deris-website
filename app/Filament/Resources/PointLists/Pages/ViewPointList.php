<?php

namespace App\Filament\Resources\PointLists\Pages;

use App\Filament\Resources\PointLists\PointListResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPointList extends ViewRecord
{
    protected static string $resource = PointListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
