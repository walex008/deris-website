<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JobApplicationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('career.title')
                    ->numeric(),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('city'),
                TextEntry::make('state'),
                TextEntry::make('country'),
                TextEntry::make('postal_code'),
                TextEntry::make('date_of_birth')
                    ->date(),
                TextEntry::make('gender'),
                TextEntry::make('current_position'),
                TextEntry::make('current_company'),
                TextEntry::make('expected_salary')
                    ->numeric(),
                TextEntry::make('notice_period'),
                TextEntry::make('employment_type'),
                TextEntry::make('resume_path'),
                TextEntry::make('cover_letter_path'),
                IconEntry::make('willing_to_relocate')
                    ->boolean(),
                IconEntry::make('has_valid_work_permit')
                    ->boolean(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
