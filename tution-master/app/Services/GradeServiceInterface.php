<?php

namespace App\Services;

use App\Models\Grade;

interface GradeServiceInterface
{
    public function getAllGrades();
    public function getGradesById($id): ?Grade;
    public function createGrade(array $data): Grade;
    public function updateGrade($id, array $data): Grade;
    public function deleteGrade($id): bool;
}
