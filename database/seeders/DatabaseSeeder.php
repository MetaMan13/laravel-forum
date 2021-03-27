<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Post::factory()->count(30)->create();
        // \App\Models\Comment::factory()->count(100)->create();
        // \App\Models\Like::factory()->count(50)->create();
        // \App\Models\Dislike::factory()->count(50)->create();
        // \App\Models\Follow::factory()->count(30)->create();
        // \App\Models\Group::factory()->count(10)->create();
        // \App\Models\GroupUser::factory()->count(10)->create();
    }
}
