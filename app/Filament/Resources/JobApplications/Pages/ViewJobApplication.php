<?php

namespace App\Filament\Resources\JobApplications\Pages;

use App\Filament\Resources\JobApplications\JobApplicationResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Storage;

class ViewJobApplication extends ViewRecord
{
    protected static string $resource = JobApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),

            Action::make('change_status')
                ->label('Change Status')
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->form([
                    Select::make('status')
                        ->label('New Status')
                        ->options([
                            'pending' => 'Pending',
                            'reviewing' => 'Reviewing',
                            'shortlisted' => 'Shortlisted',
                            'interviewed' => 'Interviewed',
                            'rejected' => 'Rejected',
                            'hired' => 'Hired',
                        ])
                        ->required()
                        ->default($this->record->status),

                    Textarea::make('notes')
                        ->label('Add Note (Optional)')
                        ->placeholder('Add any notes about this status change...')
                        ->rows(3),
                ])
                ->action(function (array $data): void {
                    $this->record->update([
                        'status' => $data['status'],
                        'notes' => $data['notes'] ? $this->record->notes . "\n\n[" . now()->format('Y-m-d H:i') . "] " . $data['notes'] : $this->record->notes,
                    ]);

                    $this->redirect($this->getResource()::getUrl('view', ['record' => $this->record]));
                }),

            Action::make('download_resume')
                ->label('Download Resume')
                ->icon('heroicon-o-document-arrow-down')
                ->color('success')
                ->url(fn () => $this->record->resume_path ? Storage::disk('public')->url($this->record->resume_path) : null)
                ->openUrlInNewTab()
                ->visible(fn () => !empty($this->record->resume_path)),

            Action::make('download_cover_letter')
                ->label('Download Cover Letter')
                ->icon('heroicon-o-document-arrow-down')
                ->color('info')
                ->url(fn () => $this->record->cover_letter_path ? Storage::disk('public')->url($this->record->cover_letter_path) : null)
                ->openUrlInNewTab()
                ->visible(fn () => !empty($this->record->cover_letter_path)),

            DeleteAction::make(),
        ];
    }
}
