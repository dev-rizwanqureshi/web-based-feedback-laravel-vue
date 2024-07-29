<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class FeedbackFactory extends Factory
{

    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category' => $this->faker->word,
//            'user_id' => User::factory(),
            'user_id' => User::first()->id ?? 1,
        ];
    }

}
