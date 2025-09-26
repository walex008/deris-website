<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagline extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'heading',
        'content',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
