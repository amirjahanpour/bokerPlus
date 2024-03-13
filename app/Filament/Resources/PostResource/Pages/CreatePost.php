<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\TagPosts;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $data['title'] = trim($data['title']);
        $post = static::getModel()::create($data);
        TagPosts::create([
            'postID' => $post->id,
            'tagID' => $data['tagID']
        ]);
        return $post;
    }
}
