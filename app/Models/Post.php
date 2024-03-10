<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'posterSID',
        'status'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'posterSID' => 'string',
        'status' => PostStatus::class,
    ];

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class,'tagID');
    }
}
