<?php
namespace App\Http\Controllers;

use App\Services\NoteServiceInterface;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    protected $noteService;

    public function __construct(NoteServiceInterface $noteService)
    {
        $this->noteService = $noteService;
    }

    public function index()
    {
        $users = $this->noteService->getAllNotes();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = $this->noteService->getNoteById($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|string',
            'grade_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        try {
            $note = $this->noteService->createNote($validatedData);
            return response()->json(['success' => 'Note created successfully', 'note' => $note], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create note', 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $note = $this->noteService->updateNote($id, $data);
        return response()->json($note);
    }

    public function destroy($id)
    {
        $result = $this->noteService->deleteNote($id);
        return response()->json(['success' => $result]);
    }
}
