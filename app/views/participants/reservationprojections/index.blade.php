@extends('layouts.master')

@section('title')
    Mes réservations
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Mes projections
@stop

@section('content')

    <h1>Toutes mes réservations</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Date</th>
            <th>Heure début</th>
            <th>Heure fin</th>
            <th>Salle</th>
            <th>Film</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projections as $projection)
            <tr>
                <td>{{ $projection->date_projection }}</td>
                <td>{{ Projection::$creneaux['horaires'][$projection->creneau]['heure_debut'] }}</td>
                <td>{{ Projection::$creneaux['horaires'][$projection->creneau]['heure_fin'] }}</td>
                <td>{{ $projection->salle->nom }}</td>
                <td>{{ $projection->film->nom }}</td>
                <td>
                    <table>
                        {{-- Form::open(array('route' => array('participants.reservationProjections.destroy',  [Auth::user()->participant->id, $projection->id), 'method' => 'delete')) --}}
                        <button type="submit" class="btn btn-warning btn-sm">Me retirer</button>
                        {{-- Form::close() --}}
                    </table>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
