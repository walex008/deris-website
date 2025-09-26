<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_read',
        'replied_at',
        'notes'
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'replied_at' => 'datetime'
    ];
}
