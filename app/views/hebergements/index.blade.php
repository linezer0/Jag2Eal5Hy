@extends('layouts.master')

@section('title')
    Liste des hébergements
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Hebergement list
@stop

@section('content')
    <h1>Liste des hébergements</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>no_siret</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Etoiles</th>
            <th>Type</th>
            <th>Nom du contact</th>
            <th>Mail du contact</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hebergements as $hebergements)
            @if($striped)
                <tr class = "table-striped">
                    <?php $striped = false; ?>
                    @else
                        <?php $striped = true; ?>
                <tr>
                    @endif
                    <td>{{ $hebergements->no_siret }}</td>
                    <td>{{ $hebergements->nom }}</td>
                    <td>{{ $hebergements->adresse }}</td>
                    <td>{{ $hebergements->etoiles }}</td>
                    <td>{{ $hebergements->type_hebergement }}</td>
                    <td>{{ $hebergements->nom_contact }}</td>
                    <td>{{ $hebergements->mail_contact }}</td>


                </tr>
                @endforeach
        </tbody>
    </table>
@stop
