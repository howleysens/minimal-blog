<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderByDesc('created_at')->simplePaginate(5);
        foreach ($posts as $post) {
            $formattedDate = $post->created_at->format('jS F, Y');
            $post->formatted_created_at = $formattedDate;
        }

        return view('welcome', compact('posts'));
    }
}
