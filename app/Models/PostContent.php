<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
