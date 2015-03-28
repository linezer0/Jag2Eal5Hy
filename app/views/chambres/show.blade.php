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
            <th>Hôtel</th>
            <th>Libellé</th>
            <th>Capacité</th>
            <th>Type de chambre</th>
            <th>Prix à la nuit</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                //<td>{{ $hebergement->no_siret }}</td>
                <td>{{ $hebergement->libelle }}</td>
                <td>{{ $hebergement->capacite }}</td>
                <td>{{ $hebergement->type_chambre }}</td>
                <td>{{ $hebergement->prix_chambre }}</td>


            </tr>
        </tbody>
    </table>

@stop
