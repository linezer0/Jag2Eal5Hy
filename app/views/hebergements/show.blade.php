@extends('layouts.master')

@section('title')
    Nouvel hébergement
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Hebergement creation page
@stop

@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>no_siret</th>
            <th>nom</th>
            <th>adresse</th>
            <th>etoiles</th>
            <th>type</th>
            <th>nom_contact</th>
            <th>mail_contact</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $hebergement->no_siret }}</td>
                <td>{{ $hebergement->nom }}</td>
                <td>{{ $hebergement->adresse }}</td>
                <td>{{ $hebergement->etoiles }}</td>
                <td>{{ $hebergement->type }}</td>
                <td>{{ $hebergement->nom_contact }}</td>
                <td>{{ $hebergement->mail_contact }}</td>

            </tr>
        </tbody>
    </table>

@stop
