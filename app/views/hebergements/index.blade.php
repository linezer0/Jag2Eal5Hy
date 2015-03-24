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
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hebergements as $hebergement)

                <tr>

                    <td>{{ $hebergement->no_siret }}</td>
                    <td>{{ $hebergement->nom }}</td>
                    <td>{{ $hebergement->adresse }}</td>
                    <td>{{ $hebergement->etoiles }}</td>
                    <td>{{ $hebergement->type_hebergement }}</td>
                    <td>{{ $hebergement->nom_contact }}</td>
                    <td>{{ $hebergement->mail_contact }}</td>
<td>
                    <table>
                       <td>
                           <a href="{{ route('hebergements.show', $hebergement->no_siret) }}"><button type="button" role="link" class="btn btn-primary btn-sm">Voir</button></a></td>
                        </td>
                        <td class="button-list-item">
                          {{ Form::open(array('route' => array('hebergements.destroy', $hebergement->no_siret), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                          {{ Form::close() }}
                        </td>
                        <td class="button-list-item">
                            <a href="{{ route('hebergements.edit', $hebergement->no_siret) }}">{{Form::open(['route' => ['hebergements.edit', $hebergement->no_siret]])}}<button type="button" role="link" class="btn btn-info btn-sm">Editer</button> {{ Form::close() }}</a>
                        </td>


                    </table>
                    </td>
</tr>


                @endforeach
        </tbody>
    </table>
@stop
