@extends('layouts.master')

@section('title')
    Liste de mes réservations
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Booking creation page
@stop

@section('content')
    <h1>Toutes mes réservations</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Etablissement</th>
            <th>Chambre</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Durée</th>
            <th>Montant total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->chambre->hebergement->nom }}</td>
                <td>{{ $reservation->chambre->libelle }}</td>
                <td>{{ $reservation->date_debut }}</td>
                <td>{{ $reservation->date_fin }}</td>
                <td>{{ $reservation->duree }} jour(s)</td>
                <td>{{ round($reservation->montant_total) }} €</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
