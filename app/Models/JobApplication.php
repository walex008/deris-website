<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'date_of_birth',
        'gender',
        'current_position',
        'current_company',
        'expected_salary',
        'notice_period',
        'employment_type',
        'education',
        'work_experience',
        'skills',
        'languages',
        'resume_path',
        'cover_letter_path',
        'portfolio_links',
        'why_join_company',
        'additional_information',
        'willing_to_relocate',
        'has_valid_work_permit',
        'status',
        'notes',
    ];

    protected $casts = [
        'education' => 'array',
        'work_experience' => 'array',
        'skills' => 'array',
        'languages' => 'array',
        'portfolio_links' => 'array',
        'date_of_birth' => 'date',
        'expected_salary' => 'decimal:2',
        'willing_to_relocate' => 'boolean',
        'has_valid_work_permit' => 'boolean',
    ];

    // Relationship to career page
    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }

    // Accessor for full name
    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    // Accessor for formatted expected salary
    public function getFormattedExpectedSalaryAttribute(): string
    {
        return $this->expected_salary ? '$' . number_format($this->expected_salary, 2) : 'Not specified';
    }

    // Scope for filtering by status
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Scope for recent applications
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('created_at', '>=', now()->subDays($days));
    }
}
