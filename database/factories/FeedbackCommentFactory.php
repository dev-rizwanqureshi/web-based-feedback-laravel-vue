<?php

namespace Database\Factories;

use App\Models\FeedbackComment;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackCommentFactory extends Factory
{
    protected $model = FeedbackComment::class;

    public function definition()
    {
        return [
            'feedback_id' => Feedback::factory(),
            'user_id' => User::factory(),
            'content' => $this->faker->paragraph,
        ];
    }
}
