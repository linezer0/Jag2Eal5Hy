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
            <th>Date début</th>
            <th>Date fin</th>
            <th>Durée</th>
            <th>Montant total</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->hebergement->nom }}</td>
                <td>{{ $reservation->date_debut }}</td>
                <td>{{ $reservation->date_fin }}</td>
                <td>{{ $reservation->duree }}</td>
                <td>{{ $reservation->montant_total }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('reservations.show', $reservation->id) }}"><button type="button" role="link" class="btn btn-primary btn-sm">Voir</button></a></td>
                        <td class="button-list-item">
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Supprimer</button>
                        </td>
                    </table>
                </td>
            </tr>
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Etes-vous sûr de vouloir continuer ?</h4>
                        </div>
                        <div class="modal-body center">
                            {{ Form::open(array('route' => array('reservations.destroy', $reservation->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-primary btn-sm">Confirmer</button>
                            {{ Form::close() }}
                            <a href="{{ route('reservations.index') }}"><button type="button" role="link" class="btn btn-default btn-sm">Annuler</button></a></td>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
@stop
