<?php

namespace App\Filament\Resources\AboutPages\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AboutPageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('heading'),
                TextEntry::make('sub_heading'),
                ImageEntry::make('banner_image'),
                TextEntry::make('mission_title'),
                TextEntry::make('mission_summary'),
                ImageEntry::make('mission_image'),
                TextEntry::make('vision_title'),
                TextEntry::make('vision_summary'),
                ImageEntry::make('vision_image'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
