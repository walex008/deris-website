<?php

namespace App\Filament\Resources\PointLists;

use App\Filament\Resources\PointLists\Pages\CreatePointList;
use App\Filament\Resources\PointLists\Pages\EditPointList;
use App\Filament\Resources\PointLists\Pages\ListPointLists;
use App\Filament\Resources\PointLists\Pages\ViewPointList;
use App\Filament\Resources\PointLists\Schemas\PointListForm;
use App\Filament\Resources\PointLists\Schemas\PointListInfolist;
use App\Filament\Resources\PointLists\Tables\PointListsTable;
use App\Models\PointList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointListResource extends Resource
{
    protected static ?string $model = PointList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Point List Item';

    public static function form(Schema $schema): Schema
    {
        return PointListForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PointListInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointListsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPointLists::route('/'),
            'create' => CreatePointList::route('/create'),
            'view' => ViewPointList::route('/{record}'),
            'edit' => EditPointList::route('/{record}/edit'),
        ];
    }
}
