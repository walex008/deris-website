<?php

namespace App\Filament\Resources\Taglines;

use App\Filament\Resources\Taglines\Pages\CreateTagline;
use App\Filament\Resources\Taglines\Pages\EditTagline;
use App\Filament\Resources\Taglines\Pages\ListTaglines;
use App\Filament\Resources\Taglines\Pages\ViewTagline;
use App\Filament\Resources\Taglines\Schemas\TaglineForm;
use App\Filament\Resources\Taglines\Schemas\TaglineInfolist;
use App\Filament\Resources\Taglines\Tables\TaglinesTable;
use App\Models\Tagline;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TaglineResource extends Resource
{
    protected static ?string $model = Tagline::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Tagline';

    public static function form(Schema $schema): Schema
    {
        return TaglineForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TaglineInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TaglinesTable::configure($table);
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
            'index' => ListTaglines::route('/'),
            'create' => CreateTagline::route('/create'),
            'view' => ViewTagline::route('/{record}'),
            'edit' => EditTagline::route('/{record}/edit'),
        ];
    }
}
