<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Note</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Modifier une Note</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="matiere">Matière</label>
                <input type="text" name="matiere" id="matiere" class="form-control" value="{{ old('matiere', $note->matiere) }}" required>
                @error('matiere')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $note->type) }}" required>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $note->date) }}" required>
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="valeur">Valeur</label>
                <input type="number" name="valeur" id="valeur" class="form-control" value="{{ old('valeur', $note->valeur) }}" step="0.01" required>
                @error('valeur')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="student_id">ID Étudiant</label>
                <input type="number" name="student_id" id="student_id" class="form-control" value="{{ old('student_id', $note->student_id) }}" required>
                @error('student_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour la Note</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>