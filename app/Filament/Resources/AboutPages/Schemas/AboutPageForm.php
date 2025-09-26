<?php

namespace App\Filament\Resources\AboutPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('heading')
                    ->required(),
                TextInput::make('sub_heading')
                    ->required(),
                Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('banner_image')
                    ->image()
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('mission_title')
                    ->required(),
                TextInput::make('mission_summary')
                    ->required(),
                Textarea::make('mission_content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('mission_image')
                    ->image()
                    ->required(),
                TextInput::make('vision_title')
                    ->required(),
                TextInput::make('vision_summary')
                    ->required(),
                Textarea::make('vision_content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('vision_image')
                    ->image()
                    ->required(),
            ]);
    }
}
