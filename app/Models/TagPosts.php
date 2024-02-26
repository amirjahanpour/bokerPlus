<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagPosts extends Model
{
    protected $table = 'tagPosts';
    protected $fillable = [
        'postID',
        'tagID',
        'showّIndex'
    ];
    protected $casts = [
        'postID' => 'integer',
        'tagID' => 'integer',
        'showّIndex' => 'boolean'
    ];
}
