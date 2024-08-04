<?php
namespace App\Repositories;

use App\Models\Assignment;

class AssignmentRepository implements AssignmentRepositoryInterface
{
    public function getAll()
    {
        return Assignment::all();
    }

    public function findById($id): ?Assignment
    {
        return Assignment::find($id);
    }

    public function create(array $data): Assignment
    {
        return Assignment::create($data);
    }

    public function update($id, array $data): Assignment
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->update($data);
        return $assignment;
    }

    public function delete($id): bool
    {
        $assignment = Assignment::find($id);
        if ($assignment) {
            $assignment->delete();
            return true;
        }
        return false;
    }
}
