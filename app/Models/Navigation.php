<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Cache;

class Navigation extends Model
{
    use HasFactory;

    protected $table = 'navigations';
    protected $fillable = [
        'title',
        'ownerID',
        'postID',
        'isArchive'
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::saving(function() {
            Cache::forget('navigations');
        });
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class,'postID');
    }
}
