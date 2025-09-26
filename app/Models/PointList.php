<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointList extends Model
{
    use HasFactory;

    protected $fillable = [
        'list_item',
        'category',
    ];
}
