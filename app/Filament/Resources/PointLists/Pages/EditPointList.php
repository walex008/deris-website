<?php

namespace App\Filament\Resources\PointLists\Pages;

use App\Filament\Resources\PointLists\PointListResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPointList extends EditRecord
{
    protected static string $resource = PointListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
