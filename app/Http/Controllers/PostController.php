<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate as FacadesGate;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', ['posts' => \App\Models\Post::with(['user', 'likes', 'comments'])->simplePaginate(50)]);
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
        if(! FacadesGate::allows('update-post', $post)){
            abort(403);
        }

        $attributes = request()->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255'
        ]);
        $post->update($attributes);
        return redirect("/post/{$post->id}");
    }

    public function destroy(Post $post)
    {
        if(! FacadesGate::allows('destroy-post', $post)){
            abort(403);
        }

        $post->delete();

        return view('post.destroy');
    }
}
