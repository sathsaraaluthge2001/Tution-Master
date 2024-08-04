<?php

namespace App\Services;

use App\Models\Grade;
use App\Repositories\GradeRepositoryInterface;

class GradeService implements GradeServiceInterface
{
    protected $gradeRepository;

    public function __construct(GradeRepositoryInterface $gradeRepository)
    {
        $this->gradeRepository = $gradeRepository;
    }

    public function getAllGrades()
    {
        return $this->gradeRepository->getAll();
    }

    public function getGradesById($id): ?Grade
    {
        return $this->gradeRepository->find($id);
    }

    public function createGrade(array $data): Grade
    {
        return $this->gradeRepository->create($data);
    }

    public function updateGrade($id, array $data): Grade
    {
        return $this->gradeRepository->update($id, $data);
    }

    public function deleteGrade($id): bool
    {
        return $this->gradeRepository->delete($id);
    }
}
