@extends('layouts.master')

@section('title')
    Liste des chambres
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Chambre list
@stop

@section('content')
    <h1>Liste des Chambres</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>Hebergement</th>
            <th>Libelle</th>
            <th>Capacite</th>
            <th>Type Chambre</th>
            <th>Prix (€)</th>

        </tr>
        </thead>
        <tbody>

        @foreach($chambres as $chambre)
            @if($striped)
                <tr class = "table-striped">
                    <?php $striped = false; ?>
                    @else
                        <?php $striped = true; ?>
                <tr>
                    @endif

                   <td>{{ $chambre->hebergement->nom }}</td>
                    <td>{{ $chambre->libelle }}</td>
                    <td>{{ $chambre->capacite }}</td>
                    <td>{{ $chambre->type_chambre }}</td>
                    <td>{{ $chambre->prix_chambre }}</td>



                </tr>
                @endforeach
        </tbody>
    </table>
@stop
