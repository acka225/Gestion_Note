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
        
        
        
        
        
        
        
        
        
        
        
    </div>
</body>
</html>