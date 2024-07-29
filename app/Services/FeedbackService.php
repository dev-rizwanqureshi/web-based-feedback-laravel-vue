<?php

namespace App\Services;

use App\Models\Feedback;

class FeedbackService
{
    public function getAll()
    {
        return Feedback::with('user')->paginate(10);
    }

    public function create($data)
    {
        return Feedback::create($data);
    }

    public function getById($id)
    {
        return Feedback::with('user', 'comments')->findOrFail($id);
    }

    public function update($id, $data)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->update($data);
        return $feedback;
    }

    public function delete($id)
    {
        Feedback::findOrFail($id)->delete();
    }
}
