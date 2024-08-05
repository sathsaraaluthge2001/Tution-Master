<?php

namespace App\Repositories;

use App\Models\Paper;
use App\Repositories\PaperRepositoryInterface;

class PaperRepository implements PaperRepositoryInterface
{
    public function getAll()
    {
        return Paper::all();
    }

    public function find($id): ?Paper
    {
        return Paper::find($id);
    }

    public function create(array $data): Paper
    {
        return Paper::create($data);
    }

    public function update($id, array $data): Paper
    {
        $paper = Paper::find($id);
        if ($paper) {
            $paper->update($data);
            return $paper;
        }
        return null;
    }

    public function delete($id): bool
    {
        $paper = Paper::find($id);
        if ($paper) {
            $paper->delete();
            return true;
        }
        return false;
    }
}
