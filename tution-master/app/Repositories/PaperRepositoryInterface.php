<?php

namespace App\Repositories;

use App\Models\Paper;

interface PaperRepositoryInterface
{
    public function getAll();
    public function find($id): ?Paper;
    public function create(array $data): Paper;
    public function update($id, array $data): Paper;
    public function delete($id): bool;
}
