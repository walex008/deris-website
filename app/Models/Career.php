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
    public function stripWord($word) {
        return Str::replaceStart($word, "Job Summary ", '');
    }


}
