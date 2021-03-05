<?php

namespace App\Traits;

use App\Models\Post;
use App\Models\User;
use App\Models\Like;

trait LikeTrait{

        public function like_post(User $user, Post $post)
        {
                Like::create([
                        'user_id' => $user->id,
                        'post_id' => $post->id
                ]);
        }

        public function delete_post_like(Like $like)
        {
                $like->delete();
        }
}