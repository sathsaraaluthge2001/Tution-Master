<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function find($id): ?User
    {
        return User::find($id);
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update($id, array $data): User
    {
        $user = User::find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id): bool
    {
        $user = User::find($id);
        return $user ? $user->delete() : false;
    }
}
