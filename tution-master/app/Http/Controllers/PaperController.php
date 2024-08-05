<?php

namespace App\Http\Controllers;

use App\Services\PaperServiceInterface;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    protected $paperService;

    public function __construct(PaperServiceInterface $paperService)
    {
        $this->paperService = $paperService;
    }

    public function index()
    {
        $papers = $this->paperService->getAllPapers();
        return response()->json($papers);
    }

    public function show($id)
    {
        $paper = $this->paperService->getPaperById($id);
        return response()->json($paper);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|string',
            'grade_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        try {
            $paper = $this->paperService->createPaper($validatedData);
            return response()->json(['success' => 'Paper created successfully', 'paper' => $paper], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create paper', 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            $paper = $this->paperService->updatePaper($id, $data);
            return response()->json($paper);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update paper', 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $result = $this->paperService->deletePaper($id);
            return response()->json(['success' => $result ? 'Paper deleted successfully' : 'Paper not found'], $result ? 200 : 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete paper', 'message' => $e->getMessage()], 500);
        }
    }
}
