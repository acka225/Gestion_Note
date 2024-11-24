@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Modifier la Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="matiere">Matière</label>
            <input type="text" name="matiere" id="matiere" class="form-control" value="{{ old('matiere', $note->matiere) }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $note->type) }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $note->date) }}" required>
        </div>
        <div class="form-group">
            <label for="valeur">Valeur</label>
            <input type="number" name="valeur" id="valeur" class="form-control" step="0.01" value="{{ old('valeur', $note->valeur) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour la Note</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Retour</a>
    </form>
</div>
@endsection