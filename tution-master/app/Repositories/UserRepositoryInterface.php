<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getAll();
    public function find($id): ?User;
    public function create(array $data): User;
    public function update($id, array $data): User;
    public function delete($id): bool;
}
