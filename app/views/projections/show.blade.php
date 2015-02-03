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
            <th>Catégorie</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $projection->date_seance }}</td>
                <td>{{ $projection->heure_debut }}</td>
                <td>{{ $projection->heure_fin }}</td>
                <td>{{ $salle }}</td>
                <td>{{$film_libelle }}</td>
                <td> {{ $categorie }}</td>
            </tr>
        </tbody>

    </table>

    </table>
@stop