<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $formattedDate = $post->created_at->format('jS F, Y');
        $post->formatted_created_at = $formattedDate;

        return view('posts.show', compact('post'));
    }

    public function comment($id, CommentForm $request)
    {
        $post = Post::findOrFail($id);
        $post->comments()->create($request->validated());

        return redirect()->route('posts.show', $id);
    }
}
