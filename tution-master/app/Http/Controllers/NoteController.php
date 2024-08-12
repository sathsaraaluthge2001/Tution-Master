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
        $data = $request->all();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/notes', $filename, 'public');
            $data['file_path'] = $path; // Add file path to data
        }

        $note  = $this->noteService->createNote($data);
        return redirect()->back()->with('success', 'Note added successfully.');
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
