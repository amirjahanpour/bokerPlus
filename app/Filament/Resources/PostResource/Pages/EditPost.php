<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\PostContent;
use App\Models\TagPosts;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $tag = TagPosts::where('postID' ,$data['id'])
            ->select(['tagID','showIndex'])
            ->first();
        $data['tagID'] = $tag->tagID;
        $data['showIndex'] = $tag->showIndex;

        $postContent = PostContent::where('postID',$data['id'])->first();
        $data['postContent'] = $postContent->content ?? [];
        $data['postHashtag'] = $postContent->hashtag ?? [];

        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        TagPosts::where('postID',$record->id)
            ->update([
            'postID' => $record->id,
            'tagID' => $data['tagID'],
            'showIndex' => $data['showIndex']
        ]);


        PostContent::updateOrCreate([
            'postID' => $record->id
        ],[
            'content' => $data['postContent'],
            'hashtag' => $data['postHashtag']
        ]);
        return $record;
    }
}
