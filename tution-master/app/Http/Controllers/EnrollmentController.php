<?php

namespace App\Http\Controllers;

use App\Services\EnrollmentServiceInterface;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    protected $enrollmentService;

    public function __construct(EnrollmentServiceInterface $enrollmentService)
    {
        $this->enrollmentService = $enrollmentService;
    }

    public function index()
    {
        $enrollments = $this->enrollmentService->getAllEnrollments();
        return response()->json($enrollments);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'grade_id' => 'required|exists:grades,id',
        ]);

        $enrollment = $this->enrollmentService->createEnrollment($validatedData);
        return response()->json($enrollment, 201);
    }

    public function show($id)
    {
        $enrollment = $this->enrollmentService->getEnrollmentById($id);
        return response()->json($enrollment);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'grade_id' => 'required|exists:grades,id',
        ]);

        $enrollment = $this->enrollmentService->updateEnrollment($id, $validatedData);
        return response()->json($enrollment);
    }

    public function destroy($id)
    {
        $this->enrollmentService->deleteEnrollment($id);
        return response()->json(null, 204);
    }
}
