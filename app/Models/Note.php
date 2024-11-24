<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'matiere',
        'type',
        'date',
        'valeur',
        'semester',
        'comments',
        'created_by',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}