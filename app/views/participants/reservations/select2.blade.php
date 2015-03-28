@extends('layouts.master')

@section('title')
    Sélectionnez la chambre que vous désirez
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Booking creation page
@stop

@section('content')
    <h1>Chambres</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Capacité</th>
            <th>Prix à la nuit</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
            @foreach($hebergement->chambres as $chambre)
                <tr>
                    <td>{{ $chambre->libelle }}</td>
                    <td>{{ $chambre->capacite }}</td>
                    <td>{{ round($chambre->prix_chambre) }}</td>
                     <td>
                         {{Form::open(['route' => 'participants.reservations.store', 'class' => 'form-inline']) }}
                         <table>
                             <tr>
                                 <td>
                                     {{ Form::hidden('participant', Auth::user()->participant->id) }}
                                     {{ Form::hidden('chambre', $chambre->id) }}
                                     {{ Form::hidden('montant_nuit', $chambre->prix_chambre) }}
                                     {{ Form::hidden('date_debut', $infos['date_debut']) }}
                                     {{ Form::hidden('date_fin', $infos['date_fin']) }}
                                     {{ Form::hidden('duree', $infos['duree']) }}
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