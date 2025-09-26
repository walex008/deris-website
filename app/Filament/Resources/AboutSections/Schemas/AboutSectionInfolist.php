<?php

namespace App\Filament\Resources\AboutSections\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AboutSectionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('subtitle'),
                ImageEntry::make('background_image'),
                TextEntry::make('background_video'),
                TextEntry::make('cta_primary_text'),
                TextEntry::make('cta_primary_link'),
                TextEntry::make('cta_secondary_text'),
                TextEntry::make('cta_secondary_link'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('order')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
