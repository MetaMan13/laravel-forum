<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Dislike;
use App\Models\Like;
use App\Traits\DislikeTrait;
use App\Traits\LikeTrait;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PostDisliked;

class DislikeController extends Controller
{
    use LikeTrait, DislikeTrait;

    public function create(Request $request)
    {
        $user = User::find($request->user_id);
        $post = Post::find($request->post_id);
        $post_owner = User::find(Post::find($request->post_id)->user->id);
        $like = Like::where('user_id', $user->id)->where('post_id', $post->id)->get();
        $dislike = Dislike::where('user_id', $user->id)->where('post_id', $post->id)->get();


        // Check if like exists
        if(count($dislike) > 0)
        {
            $this->delete_post_dislike($dislike[0]);
            return back();
        }else{

            /*
                Check if dislike exists and delete it
            */

            if(count($like) > 0)
            {
                $this->delete_post_like($like[0]);
                $this->dislike_post($user, $post);
                return back();
            }

            $this->dislike_post($user, $post);
            Notification::send($post_owner, new PostDisliked($user, $post));
            return back();
        }
    }

    public function destroy(Dislike $dislike)
    {
        $dislike->delete();
    }
}
