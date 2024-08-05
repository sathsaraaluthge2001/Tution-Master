<?php

namespace App\Services;

use App\Models\Paper;
use App\Repositories\PaperRepositoryInterface;

class PaperService implements PaperServiceInterface
{
    protected $paperRepository;

    public function __construct(PaperRepositoryInterface $paperRepository)
    {
        $this->paperRepository = $paperRepository;
    }

    public function getAllPapers()
    {
        return $this->paperRepository->getAll();
    }

    public function getPaperById($id): ?Paper
    {
        return $this->paperRepository->find($id);
    }

    public function createPaper(array $data): Paper
    {
        return $this->paperRepository->create($data);
    }

    public function updatePaper($id, array $data): Paper
    {
        return $this->paperRepository->update($id, $data);
    }

    public function deletePaper($id): bool
    {
        return $this->paperRepository->delete($id);
    }
}
