<?php

namespace App\Services;

use App\Models\User;

interface UserServiceInterface
{
    public function getAllUsers();
    public function getUserById($id);
    public function createUser(array $data): User;
    public function updateUser($id, array $data): User;
    public function deleteUser($id): bool;
    
}
