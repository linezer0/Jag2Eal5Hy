@extends('layouts.master')

@section('title')
    Liste des projections
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Projection creation page
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
                <th>Disponibles</th>
                <th>Réservées</th>
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
                        <td> {{ $projection->places_reservees }}</td>
                        <td>
                            <table>
                               <td>
                                   <a href="{{ route('projections.show', $projection->id) }}"><button type="button" role="link" class="btn btn-primary btn-sm">Voir</button></a></td>
                                <td class="button-list-item">
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Supprimer</button>
                                </td>
                                <td class="button-list-item">
                                    <a href="{{ route('projections.edit', $projection->id) }}">{{Form::open(['route' => ['projections.edit', $projection->id]])}}<button type="button" role="link" class="btn btn-info btn-sm">Editer</button> {{ Form::close() }}</a>
                                </td>

                            </table>
                        </td>
                    </tr>
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Voulez-vous continuer ?</h4>
                                </div>
                                <div class="modal-body center">
                                    {{ Form::open(array('route' => array('projections.destroy', $projection->id), 'method' => 'delete')) }}
                                    <button type="submit" class="btn btn-primary btn-sm">Confirmer</button>
                                    {{ Form::close() }}
                                    <a href="{{ route('projections.index') }}"><button type="button" role="link" class="btn btn-default btn-sm">Annuler</button></a></td>
                                </div>

                            </div>
                        </div>
                    </div>
            @endforeach
        </tbody>
    </table>
@stop
