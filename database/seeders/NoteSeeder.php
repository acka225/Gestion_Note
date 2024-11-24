<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note; // Importation du modèle Note

class NoteSeeder extends Seeder
{
    public function run()
    {
        Note::create([
            'student_id' => 1,
            'matiere' => 'Mathématiques',
            'type' => 'Examen',
            'date' => '2024-06-15',
            'valeur' => 15.5,
            'semester' => '2024-1',
            'comments' => 'Bon travail',
            'created_by' => 1,
        ]);
    }
}
