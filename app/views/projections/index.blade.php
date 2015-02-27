@extends('layouts.master')

@section('title')
    Nouvelle projection
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Projection creation page
@stop

@section('content')

    <h1>Toutes les projections</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Heure début</th>
                <th>Heure fin</th>
                <th>Salle</th>
                <th>Film</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projections as $projection)
                    <tr>
                        <td>{{ $projection->date_seance }}</td>
                        <td>{{ $projection->heure_debut }}</td>
                        <td>{{ $projection->heure_fin }}</td>
                        <td>{{ $projection->salle->name }}</td>
                        <td>{{ $projection->film->libelle }}</td>
                        <td> {{ $projection->film->categorie }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@stop