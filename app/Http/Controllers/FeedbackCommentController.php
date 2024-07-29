<?php

namespace App\Http\Controllers;

use App\Services\FeedbackCommentService;
use Illuminate\Http\Request;

class FeedbackCommentController extends Controller
{
    protected $commentService;

    public function __construct(FeedbackCommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index($feedbackId)
    {
        return $this->commentService->getAll($feedbackId);
    }

    public function store(Request $request, $feedbackId)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $validated['user_id'] = $request->user()->id;

        $comment = $this->commentService->create($feedbackId, $validated);

        return response()->json($comment, 201);
    }

    public function show($feedbackId, $id)
    {
        return $this->commentService->getById($id);
    }

    public function update(Request $request, $feedbackId, $id)
    {
        $validated = $request->validate([
            'content' => 'sometimes|string',
        ]);

        $comment = $this->commentService->update($id, $validated);

        return response()->json($comment);
    }

    public function destroy($feedbackId, $id)
    {
        $this->commentService->delete($id);

        return response()->json(null, 204);
    }
}
