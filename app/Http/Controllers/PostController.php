<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(User $user)
    {
        $attributes = request()->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255'
        ]);
        $attributes['user_id'] = auth()->user()->id;
        $post = Post::create($attributes);
        return redirect("/post/{$post->id}");
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255'
        ]);
        $post->update($attributes);
        return redirect("/post/{$post->id}");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return view('post.destroy');
    }
}
