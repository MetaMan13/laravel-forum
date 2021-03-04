<?php

namespace Database\Factories;

use App\Models\Dislike;
use Illuminate\Database\Eloquent\Factories\Factory;

class DislikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dislike::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::all()->random()->id,
            'post_id' => \App\Models\Post::all()->random()->id,
        ];
    }
}
