<?php
namespace App\Repositories;

use App\Models\Note;

class NoteRepository implements NoteRepositoryInterface
{
    public function getAll()
    {
        return Note::all();
    }

    public function find($id): ?Note
    {
        return Note::find($id);
    }

    public function create(array $data): Note
    {
        return Note::create($data);
    }

    public function update($id, array $data): Note
    {
        $note = Note::findOrFail($id);
        $note->update($data);
        return $note;
    }

    public function delete($id): bool
    {
        $note = Note::find($id);
        if ($note) {
            $note->delete();
            return true;
        }
        return false;
    }
}

