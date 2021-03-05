<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Dislike;
use App\Notifications\PostDisliked;
use Illuminate\Support\Facades\Notification;

class DislikeController extends Controller
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
        $dislike = Dislike::where('user_id', $user->id)->where('post_id', $post->id)->get();

        /* 
            Check if user already liked the post
        */

        if(count($dislike) > 0)
        {
            $this->destroy($dislike[0]);
            return back();
        }

        Dislike::create($attributes);

        Notification::send($post_owner, new PostDisliked($user, $post));

        return back();
    }

    public function destroy(Dislike $dislike)
    {
        $dislike->delete();
    }
}
