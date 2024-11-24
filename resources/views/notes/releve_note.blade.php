@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Relevé de Notes</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Matière</th>
                <th>Type</th>
                <th>Date</th>
                <th>Valeur</th>
                <th>ID Étudiant</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
            <tr>
                <td>{{ $note->matiere }}</td>
                <td>{{ $note->type }}</td>
                <td>{{ $note->date }}</td>
                <td>{{ $note->valeur }}</td>
                <td>{{ $note->id_etudiant }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('styles')
<style>
    .table {
        margin-top: 20px;
    }
</style>
@endpush