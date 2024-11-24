@extends('layouts.app')

@section('content')
<div class="form-container">
    <h1></h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf    
        @foreach (['matiere' => 'Matière', 'type' => 'Type', 'date' => 'Date', 'valeur' => 'Valeur', 'id_etudiant' => 'ID Étudiant'] as $name => $label)
        <div class="form-group">
            <label for="{{ $name }}">{{ $label }}</label>
            <input 
                type="{{ $name === 'date' ? 'date' : 'text' }}" 
                id="{{ $name }}" 
                name="{{ $name }}" 
                placeholder="Entrez {{ strtolower($label) }}" 
                {{ $name !== 'id_etudiant' ? 'required' : '' }}
            >
        </div>
        @endforeach

        <button type="submit" class="btn btn-success">Ajouter la Note</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Retour</a>
    </form>
</div>
@endsection

@push('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    button:hover {
        background-color: #45a049;
    }

    .btn-secondary {
        margin-right: 10px;
    }
</style>
@endpush
