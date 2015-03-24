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
          //  <th>no_siret</th>
            <th>libelle</th>
            <th>capacite</th>
            <th>type_chambre</th>
            <th>prix_chambre</th>

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
