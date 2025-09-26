<?php

namespace App\Filament\Resources\PointLists\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;

class PointListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('list_item'),
                ToggleButtons::make('category')
                    ->options([
                        'mission' => 'mission',
                        'vision' => 'vision',
                        'service' => 'service',
                        'about' => 'about'
                    ]),
            ]);
    }
}
