<?php

namespace App\Filament\Resources\HighlightSections;

use App\Filament\Resources\HighlightSections\Pages\CreateHighlightSection;
use App\Filament\Resources\HighlightSections\Pages\EditHighlightSection;
use App\Filament\Resources\HighlightSections\Pages\ListHighlightSections;
use App\Filament\Resources\HighlightSections\Pages\ViewHighlightSection;
use App\Filament\Resources\HighlightSections\Schemas\HighlightSectionForm;
use App\Filament\Resources\HighlightSections\Schemas\HighlightSectionInfolist;
use App\Filament\Resources\HighlightSections\Tables\HighlightSectionsTable;
use App\Models\HighlightSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HighlightSectionResource extends Resource
{
    protected static ?string $model = HighlightSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Sections Heading';

    public static function form(Schema $schema): Schema
    {
        return HighlightSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HighlightSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HighlightSectionsTable::configure($table);
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
            'index' => ListHighlightSections::route('/'),
            'create' => CreateHighlightSection::route('/create'),
            'view' => ViewHighlightSection::route('/{record}'),
            'edit' => EditHighlightSection::route('/{record}/edit'),
        ];
    }
}
