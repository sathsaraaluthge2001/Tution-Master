<?php
namespace App\Services;

use App\Models\Note;

interface NoteServiceInterface
{
    public function getAllNotes();
    public function getNoteById($id): ?Note;
    public function createNote(array $data): Note;
    public function updateNote($id, array $data): Note;
    public function deleteNote($id): bool;
}

