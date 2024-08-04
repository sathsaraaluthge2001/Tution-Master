<?php
namespace App\Services;

use App\Models\Assignment;

interface AssignmentServiceInterface
{
    public function getAllAssignments();
    public function getAssignmentById($id): ?Assignment;
    public function createAssignment(array $data): Assignment;
    public function updateAssignment($id, array $data): Assignment;
    public function deleteAssignment($id): bool;
}
