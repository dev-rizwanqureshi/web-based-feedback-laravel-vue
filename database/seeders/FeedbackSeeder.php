<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Feedback;
use App\Models\FeedbackComment;
use Illuminate\Support\Facades\Hash;

class FeedbackSeeder extends Seeder
{
    public function run()
    {

        Feedback::factory()
            ->count(10)
            ->has(FeedbackComment::factory()->count(2), 'comments')
            ->create();
    }
}
