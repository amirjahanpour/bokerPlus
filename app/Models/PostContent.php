<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostContent extends Model
{

    protected $table = 'postContents';
    protected $fillable = [
        'postID',
        'content',
        'hashtag'
    ];
    protected $casts = [
        'postID' => 'integer',
        'content' => 'json',
        'hashtag'=> 'json'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class,'postID');
    }
}
