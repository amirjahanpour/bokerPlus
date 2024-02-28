<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = [
        'name',
        'sort',
        'isArchive'
    ];
    protected $casts = [
        'name' => 'string',
        'sort' => 'integer',
        'isArchive' => 'boolean'
    ];

    public function tagPosts(): hasMany
    {
        return $this->hasMany(TagPosts::class,'tagID');
    }

}
