<?php

namespace App\Filament\Resources\AboutPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading')
                    ->searchable(),
                TextColumn::make('sub_heading')
                    ->searchable(),
                ImageColumn::make('banner_image'),
                TextColumn::make('mission_title')
                    ->searchable(),
                TextColumn::make('mission_summary')
                    ->searchable(),
                ImageColumn::make('mission_image'),
                TextColumn::make('vision_title')
                    ->searchable(),
                TextColumn::make('vision_summary')
                    ->searchable(),
                ImageColumn::make('vision_image'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
