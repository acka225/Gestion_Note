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
        // Validation des données
        $validated = $request->validate([
            'matiere' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'date' => 'required|date',
            'valeur' => 'required|numeric',
            'student_id' => 'required|integer',
        ]);

        // Création d'une nouvelle note
        $note = Note::create($validated);

        // Redirection vers la liste des notes avec un message de succès
        return response()->json($note, 201);
    }

    public function edit($id): View
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Validation des données
        $validated = $request->validate([
            'matiere' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'date' => 'required|date',
            'valeur' => 'required|numeric',
            'student_id' => 'required|integer', // Validation pour student_id
        ]);

        // Récupération de la note à mettre à jour
        $note = Note::findOrFail($id);

        // Mise à jour de la note avec les données validées
        $note->update($validated);

        // Redirection ou retour JSON, selon vos besoins
        return response()->json($note);
    }

    public function destroy($id): JsonResponse
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json(['message' => 'Note supprimée']);
    }
}