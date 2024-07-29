<?php

namespace App\Services;

use App\Models\FeedbackComment;

class FeedbackCommentService
{
    public function getAll($feedbackId)
    {
        return FeedbackComment::where('feedback_id', $feedbackId)->with('user')->get();
    }

    public function create($feedbackId, $data)
    {
        return FeedbackComment::create(array_merge($data, ['feedback_id' => $feedbackId]));
    }

    public function getById($id)
    {
        return FeedbackComment::findOrFail($id);
    }

    public function update($id, $data)
    {
        $comment = FeedbackComment::findOrFail($id);
        $comment->update($data);
        return $comment;
    }

    public function delete($id)
    {
        FeedbackComment::findOrFail($id)->delete();
    }
}
