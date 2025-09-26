<?php

namespace App\Filament\Resources\Donates;

use App\Filament\Resources\Donates\Pages\CreateDonate;
use App\Filament\Resources\Donates\Pages\EditDonate;
use App\Filament\Resources\Donates\Pages\ListDonates;
use App\Filament\Resources\Donates\Pages\ViewDonate;
use App\Filament\Resources\Donates\Schemas\DonateForm;
use App\Filament\Resources\Donates\Schemas\DonateInfolist;
use App\Filament\Resources\Donates\Tables\DonatesTable;
use App\Models\Donate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DonateResource extends Resource
{
    protected static ?string $model = Donate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Donate';

    public static function form(Schema $schema): Schema
    {
        return DonateForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DonateInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonatesTable::configure($table);
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
            'index' => ListDonates::route('/'),
            'create' => CreateDonate::route('/create'),
            'view' => ViewDonate::route('/{record}'),
            'edit' => EditDonate::route('/{record}/edit'),
        ];
    }
}
