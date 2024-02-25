<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $table = 'posts';
    protected $fillable = [
        'content',
        'description',
        'status'
    ];

    protected $casts = [
        'content' => 'json'
    ];
}
