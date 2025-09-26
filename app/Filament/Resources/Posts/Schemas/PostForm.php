<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->required(),
                DateTimePicker::make('published_at'),
                RichEditor::make('body')
                    ->required()
                    ->fileAttachmentsDirectory('attachment')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull(),
                Select::make('user_id')
                    ->label('Creator')
                    ->options(User::query()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('categories', 'title')
                    ->searchable()
                    ->required(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
