<?php

namespace App\Http\Controllers;

use App\Services\AssignmentServiceInterface;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    protected $assignmentService;

    public function __construct(AssignmentServiceInterface $assignmentService)
    {
        $this->assignmentService = $assignmentService;
    }

    public function index()
    {
        $assignments = $this->assignmentService->getAllAssignments();
        return response()->json($assignments);
    }

    public function show($id)
    {
        $assignment = $this->assignmentService->getAssignmentById($id);
        if ($assignment) {
            return response()->json($assignment);
        } else {
            return response()->json(['message' => 'Assignment not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = $this->assignmentService->createAssignment($data);
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = $this->assignmentService->updateAssignment($id, $data);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $success = $this->assignmentService->deleteAssignment($id);
        if ($success) {
            return response()->json(['message' => 'Assignment deleted successfully']);
        } else {
            return response()->json(['message' => 'Assignment not found'], 404);
        }
    }
}
