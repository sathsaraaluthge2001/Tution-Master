<?php
namespace App\Services;

use App\Models\Note;
use App\Repositories\NoteRepositoryInterface;

class NoteService implements NoteServiceInterface
{
    protected $noteRepository;

    public function __construct(NoteRepositoryInterface $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function getAllNotes()
    {
        return $this->noteRepository->getAll();
    }

    public function getNoteById($id): ?Note
    {
        return $this->noteRepository->find($id); // Use find method, not findById
    }

    public function createNote(array $data): Note
    {
        return $this->noteRepository->create($data);
    }

    public function updateNote($id, array $data): Note
    {
        return $this->noteRepository->update($id, $data);
    }

    public function deleteNote($id): bool
    {
        return $this->noteRepository->delete($id);
    }
}

