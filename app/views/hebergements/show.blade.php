@extends('layouts.master')

@section('title')
    Voir Hebergement
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Hebergement show page
@stop

@section('content')
    <h1>Liste des Chambres pour {{$hebergement->nom}}</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>

            <th>Libelle</th>
            <th>Capacite</th>
            <th>Type Chambre</th>
            <th>Prix (€)</th>

        </tr>
        </thead>
        <tbody>
        @foreach($hebergement->chambres as $chambre)
            @if($striped)
                <tr class = "table-striped">
                    <?php $striped = false; ?>
                    @else
                        <?php $striped = true; ?>
                <tr>
                    @endif


                    <td>{{ $chambre->libelle }}</td>
                    <td>{{ $chambre->capacite }}</td>
                    <td>{{ $chambre->type_chambre }}</td>
                    <td>{{ $chambre->prix_chambre }}</td>



                </tr>
                @endforeach
        </tbody>
    </table>
@stop
