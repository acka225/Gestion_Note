<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Note</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Ajouter une Note</h1>
        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="matiere">Matière</label>
                <input type="text" name="matiere" id="matiere" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="valeur">Valeur</label>
                <input type="number" name="valeur" id="valeur" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter la Note</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Retour</a>
        
        
        <form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <div>
        <label for="matiere">Matière:</label>
        <input type="text" name="matiere" id="matiere" required>
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" required>
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
    </div>
    <div>
        <label for="valeur">Valeur:</label>
        <input type="number" name="valeur" id="valeur" step="0.01" required>
    </div>
    <div>
        <label for="student_id">ID Étudiant:</label>
        <input type="number" name="student_id" id="student_id" required>
    </div>
    <button type="submit">Ajouter Note</button>
</form>
        
        
        
        
        
        
        
        
        
        
        </form>
    </div>
</body>
</html>