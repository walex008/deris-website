<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CareerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->readOnly()
                    ->required(),
                Select::make('category')
                    ->options([
                        'Field Officers' =>'Field Officers',
                        'Human Resource' =>'Human Resource',
                        'Accounting' =>'Accounting',
                        'Risk & Compliance' =>'Risk & Compliance',
                        'Training' =>'Training',
                        'ICT' =>'ICT'
                    ]),
                Select::make('location')
                     ->options([
                         'Ibadan' => 'Ibadan',
                         'Osun' => 'Osun',
                         'Ilorin' => 'Ilorin',
                     ]),
                RichEditor::make('description')
                    ->columnSpanFull(),
                Toggle::make('active'),
                DatePicker::make('pubished_at'),
            ]);
    }
}
