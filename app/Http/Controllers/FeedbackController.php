<?php

namespace App\Http\Controllers;

use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $feedbackService;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    public function index()
    {
        return $this->feedbackService->getAll();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
        ]);

        $validated['user_id'] = $request->user()->id;

        $feedback = $this->feedbackService->create($validated);

        return response()->json($feedback, 201);
    }

    public function show($id)
    {
        return $this->feedbackService->getById($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'category' => 'sometimes|string',
        ]);

        $feedback = $this->feedbackService->update($id, $validated);

        return response()->json($feedback);
    }

    public function destroy($id)
    {
        $this->feedbackService->delete($id);

        return response()->json(null, 204);
    }
}
