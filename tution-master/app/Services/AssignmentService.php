<?php
namespace App\Services;

use App\Models\Assignment;
use App\Repositories\AssignmentRepositoryInterface;

class AssignmentService implements AssignmentServiceInterface
{
    protected $assignmentRepository;

    public function __construct(AssignmentRepositoryInterface $assignmentRepository)
    {
        $this->assignmentRepository = $assignmentRepository;
    }

    public function getAllAssignments()
    {
        return $this->assignmentRepository->getAll();
    }

    public function getAssignmentById($id): ?Assignment
    {
        return $this->assignmentRepository->findById($id);
    }

    public function createAssignment(array $data): Assignment
    {
        return $this->assignmentRepository->create($data);
    }

    public function updateAssignment($id, array $data): Assignment
    {
        return $this->assignmentRepository->update($id, $data);
    }

    public function deleteAssignment($id): bool
    {
        return $this->assignmentRepository->delete($id);
    }
}
