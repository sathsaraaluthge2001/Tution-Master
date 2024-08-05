<?php

namespace App\Services;

use App\Models\Paper;

interface PaperServiceInterface
{
    public function getAllPapers();
    public function getPaperById($id);
    public function createPaper(array $data): Paper;
    public function updatePaper($id, array $data): Paper;
    public function deletePaper($id): bool;
}
