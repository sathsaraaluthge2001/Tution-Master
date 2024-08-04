<?php
namespace App\Repositories;

use App\Models\Note;

interface NoteRepositoryInterface
{
    public function getAll();
    public function find($id): ?Note;
    public function create(array $data): Note;
    public function update($id, array $data): Note;
    public function delete($id): bool;
}
