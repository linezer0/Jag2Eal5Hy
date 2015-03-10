@extends('layouts.master')

@section('title')
    Liste des utilisateurs
@stop

@section('author')
    thomasparker
@stop

@section('description')
    User list
@stop

@section('content')
    <h1>Liste des utilisateurs</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Rôle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($participants as $participant)
            @if($striped)
                <tr class = "table-striped">
                    <?php $striped = false; ?>
                    @else
                        <?php $striped = true; ?>
                <tr>
                    @endif
                    <td>{{ $participant->id }}</td>
                    <td>{{ $participant->nom }}</td>
                    <td>{{ $participant->prenom }}</td>
                    <td>{{ $participant->email }}</td>
                    <td>{{ Participant::$roles[$participant->role] }}</td>


                </tr>
                @endforeach
        </tbody>
    </table>
@stop