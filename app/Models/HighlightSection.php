<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightSection extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
