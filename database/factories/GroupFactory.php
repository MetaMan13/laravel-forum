<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->domainName,
            'user_id' => \App\Models\User::all()->random()->id,
            'country_id' => \App\Models\Country::all()->random()->id,
            'description' => $this->faker->paragraph,
        ];
    }
}
