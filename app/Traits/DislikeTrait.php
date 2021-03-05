<?php

    namespace App\Traits;

use App\Models\Dislike;
use App\Models\Post;
use App\Models\User;

trait DislikeTrait{

        public function dislike_post(User $user, Post $post)
        {
            Dislike::create([
                'user_id' => $user->id,
                'post_id' => $post->id
            ]);
        }

        public function delete_post_dislike(Dislike $dislike)
        {
            $dislike->delete();
        }
    }