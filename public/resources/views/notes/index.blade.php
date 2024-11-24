@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Liste des Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Ajouter une Note</a>
    
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Matière</th>
                <th>Type</th>
                <th>Date</th>
                <th>Valeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->matiere }}</td>
                    <td>{{ $note->type }}</td>
                    <td>{{ $note->date }}</td>
                    <td>{{ $note->valeur }}</td>
                    <td>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection