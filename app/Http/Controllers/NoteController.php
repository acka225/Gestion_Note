<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;




class NoteController extends Controller

{

public function index(): View

{

$notes = Note::all();

return view('notes.index', compact('notes'));

}

public function create(): View

{

return view('notes.create');

}

public function store(Request $request): JsonResponse

{

$validated = $request->validate([

'matiere' => 'required|string|max:255',

'type' => 'required|string|max:255',

'date' => 'required|date',

'valeur' => 'required|numeric',

'student_id' => 'required|integer', // Assurez-vous que student_id est validé

]);

$note = Note::create($validated);

return response()->json($note, 201);


}

public function edit($id): View

{

$note = Note::findOrFail($id);

return view('notes.edit', compact('note'));

}

public function update(Request $request, $id): JsonResponse

{

$validated = $request->validate([

'matiere' => 'required|string|max:255',

'type' => 'required|string|max:255',

'date' => 'required|date',

'valeur' => 'required|numeric',

'student_id' => 'required|integer', // Ajout de la validation pour student_id

'created_by' => 'required|integer', // Assurez-vous d'ajouter la validation si nécessaire


]);

$note = Note::findOrFail($id);

$note->update($validated);

return response()->json($note);

}

public function destroy($id): JsonResponse

{

$note = Note::findOrFail($id);

$note->delete();

return response()->json(['message' => 'Note supprimée']);

}

} 