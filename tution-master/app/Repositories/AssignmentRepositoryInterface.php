<?php

namespace App\Repositories;

use App\Models\Assignment;

interface AssignmentRepositoryInterface
{
    public function getAll();
    public function findById($id): ?Assignment;
    public function create(array $data): Assignment;
    public function update($id, array $data): Assignment;
    public function delete($id): bool;
}

