<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:2|max:20',
            'body'  => 'required|min:5|max:255',
        ]);

        $post = Post::create($validated);

        return redirect()->route('posts.show', $post);
    }

    public function update(Post $post, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:2|max:20',
            'body'  => 'required|min:5|max:255',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
