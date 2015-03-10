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
            <tr>
                <td>{{ $projection->date_projection }}</td>
                <td>{{ Projection::$creneaux['horaires'][$projection->creneau]['heure_debut'] }}</td>
                <td>{{ Projection::$creneaux['horaires'][$projection->creneau]['heure_fin'] }}</td>
                <td>{{ $salle_nom }}</td>
                <td>{{ $film_nom }}</td>
            </tr>
        </tbody>
    </table>

@stop