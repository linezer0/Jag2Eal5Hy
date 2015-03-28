@extends('layouts.master')

@section('title')
    Liste des demandes d'accès
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Access requests
@stop

@section('content')
    @if(!$accessrequests->isEmpty())
    <h1>Liste des demandes d'accès</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Métier</th>
            <th>Entreprise</th>
            <th>Statut</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>

            @foreach($accessrequests as $accessrequest)
                @if($striped)
                    <tr class = "table-striped">
                        <?php $striped = false; ?>
                        @else
                            <?php $striped = true; ?>
                        <tr>
                @endif
                    <td>{{ $accessrequest->nom }}</td>
                    <td>{{ $accessrequest->prenom }}</td>
                    <td>{{ Participant::$roles[$accessrequest->role] }}</td>
                    <td>{{ $accessrequest->entreprise }}</td>
                    <td> {{ AccessRequest::$statuts[$accessrequest->statut] }}</td>
                    @if($accessrequest->statut == 'en_attente')
                        <td><a href="{{ route('accessrequests.show', $accessrequest->id) }}"><button type="button" role="link" class="btn btn-primary btn-sm">Voir</button></a></td>
                    @else
                        <td><a href="{{ route('accessrequests.show', $accessrequest->id) }}"><button type="button" role="link" class="btn btn-default btn-sm" disabled="disabled">Traitée</button></a></td>
                    @endif
                    </tr>
            @endforeach
        @else
            <h3>Pas de demandes d'accès à traiter.</h3>
        @endif
        </tbody>
    </table>
@stop