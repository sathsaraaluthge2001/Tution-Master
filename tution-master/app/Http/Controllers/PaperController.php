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
        $data = $request->all();

        // Handle file upload
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('uploads/papers', $filename, 'public');
        $data['file_path'] = $path; // Add file path to data
    }

        $paper  = $this->paperService->createPaper($data);
        return redirect()->back()->with('success', 'Paper added successfully.');
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
