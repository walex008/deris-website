<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('career_id')
                    ->relationship('career', 'title')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('city')
                    ->required(),
                TextInput::make('state')
                    ->required(),
                TextInput::make('country')
                    ->required(),
                TextInput::make('postal_code'),
                DatePicker::make('date_of_birth'),
                TextInput::make('gender'),
                TextInput::make('current_position'),
                TextInput::make('current_company'),
                TextInput::make('expected_salary')
                    ->numeric(),
                TextInput::make('notice_period'),
                TextInput::make('employment_type')
                    ->required(),
                Textarea::make('education')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('work_experience')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('skills')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('languages')
                    ->columnSpanFull(),
                TextInput::make('resume_path'),
                TextInput::make('cover_letter_path'),
                Textarea::make('portfolio_links')
                    ->columnSpanFull(),
                Textarea::make('why_join_company')
                    ->columnSpanFull(),
                Textarea::make('additional_information')
                    ->columnSpanFull(),
                Toggle::make('willing_to_relocate')
                    ->required(),
                Toggle::make('has_valid_work_permit')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
