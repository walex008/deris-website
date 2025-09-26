<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'mission',
        'vision',
        'background_image',
        'cta_primary_text',
        'cta_primary_link',
        'cta_secondary_text',
        'cta_secondary_link',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
