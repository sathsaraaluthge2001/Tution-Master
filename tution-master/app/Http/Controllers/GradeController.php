<?php

namespace App\Http\Controllers;

use App\Services\GradeServiceInterface;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    protected $gradeService;

    public function __construct(GradeServiceInterface $gradeService)
    {
        $this->gradeService = $gradeService;
    }

    public function index()
    {
        $grades = $this->gradeService->getAllGrades();
        return response()->json($grades);
    }

    public function show($id)
    {
        $grade = $this->gradeService->getGradesById($id);
        return response()->json($grade);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $grade = $this->gradeService->createGrade($data);
        return response()->json($grade, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $grade = $this->gradeService->updateGrade($id, $data);
        return response()->json($grade);
    }

    public function destroy($id)
    {
        $result = $this->gradeService->deleteGrade($id);
        return response()->json(['success' => $result]);
    }
}
