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

        $user = User::find($request->user_id);
        $post = Post::find($request->post_id);
        $post_owner = User::find(Post::find($request->post_id)->user->id);
        $like = Like::where('user_id', $user->id)->where('post_id', $post->id)->get();

        /* 
            Check if user already liked the post
        */

        if(count($like) > 0)
        {
            $this->destroy($like[0]);
            return back();
        }

        Like::create($attributes);

        Notification::send($post_owner, new PostLiked($user, $post));

        return back();
    }

    public function destroy(Like $like)
    {
        $like->delete();
    }
}
