<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PostLiked;

class LikeController extends Controller
{
    public function create(Request $request)
    {
        $attributes = [
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ];

        /* 
            Check if user already liked the post
        */

        if(count(User::find($request->user_id)->likes->where('post_id', request()->post_id)) > 0)
        {
            return back();
        }

        $user_liked_post = User::find($request->user_id);
        $post = Post::find($request->post_id);
        $post_owner = User::find(Post::find($request->post_id)->user->id);
        Like::create($attributes);
        Notification::send($post_owner, new PostLiked($user_liked_post, $post));
        return back();
    }
}
