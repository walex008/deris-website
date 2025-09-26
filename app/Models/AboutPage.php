<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'sub_heading',
        'short_description',
        'banner_image',
        'content',
        'mission_title',
        'mission_summary',
        'mission_content',
        'mission_image',
        'vision_title',
        'vision_summary',
        'vision_content',
        'vision_image'
    ];
}
