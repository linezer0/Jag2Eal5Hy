@extends('layouts.master')

@section('title')
    Mes projections
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Mes projections
@stop

@section('content')

    <h1>Toutes les projections</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Date</th>
            <th>Heure début</th>
            <th>Heure fin</th>
            <th>Salle</th>
            <th>Film</th>
            <th>Places disponibles</th>
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
                <td>{{ $projection->places_disponibles }}</td>
                <td>
                        {{Form::open(['route' => 'participants.reservationProjections.store', 'class' => 'form-inline']) }}
                            <table>
                                <tr>
                                    <td>
                                        {{ Form::label('places', 'Places') }}
                                        {{ Form::selectRange('places', 1, Projection::$nb_places_projections, null, ['class' => 'form-control select_number']); }}
                                        {{ Form::hidden('projection', $projection->id) }}
                                    </td>
                                    <td>
                                        {{Form::submit('Réserver', ['class' => 'btn btn-primary'])}}
                                    </td>
                                </tr>
                            </table>
                        {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
