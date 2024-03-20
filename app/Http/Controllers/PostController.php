<?php

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Models\Post;
use App\Models\PostContent;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::select('id','name')
            ->with('tagPosts:postID,tagID')
            ->withCount('tagPosts as countPost')
            ->where('isArchive',false)
            ->orderBy('sort')
            ->get();

        $postIDs = $tags->when(
            (integer)Request()->tagID,
            fn($query) => $query->where('id',Request()->tagID)
        )->pluck('tagPosts.*.postID')
            ->flatten()
            ->toArray();

        $posts = Post::whereIn('id',array_unique($postIDs))
            ->where('status',PostStatus::Published)
            ->paginate(4);

        $posts->each(function ($post) {
            $string = preg_replace('/[\/_|+ -]+/', '-', $post->title);
            $post->slugTitle = $string;
        });

        return view('post.index',compact('posts','tags'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $title)
    {
        $formattedTitle = str_replace("-", " ", $title);

        $post = Post::where('title', $formattedTitle)->firstOrFail();

        $postContent = PostContent::where('postID', $post->id)
            ->with('post:id,description,posterSID')
            ->firstOrFail();

        return view('post.show', compact('postContent'));
    }
}
