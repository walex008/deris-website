<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'category',
        'description',
        'published_at',
        'active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'published_at' => 'date'
    ];

    public function shortBody() {
        return Str::words(strip_tags($this->description), 30);
    }
    /**
     * Get all job applications for this career page
     */
    public function jobApplications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }

    /**
     * Get the count of applications for this position
     */
    public function getApplicationsCountAttribute(): int
    {
        return $this->jobApplications()->count();
    }

    /**
     * Get recent applications (last 30 days)
     */
    public function getRecentApplicationsCountAttribute(): int
    {
        return $this->jobApplications()
            ->where('created_at', '>=', now()->subDays(30))
            ->count();
    }


}
