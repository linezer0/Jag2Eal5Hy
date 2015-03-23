@extends('layouts.master')

@section('title')
    Panneau d'administration
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Home page of the WeCannes application
@stop

@section('content')
    <h1>Bienvenue sur WeCannes !</h1>
    <p class="lead">WeCannes est l'application utilisée par le Festival de Cannes pour sa gestion interne.<br>Une fois connecté, vous aurez accès aux fonctionnalités relatives à la gestion de l'hébergement et des projections de films.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestion des utilisateurs</h3>
                </div>
                <div class="panel-body">
                  <ul>
                      <li> {{link_to_route('accessrequests.index', 'Liste des demandes d\'accès')}}</li>
                      <li> {{link_to_route('participants.index', 'Liste des participants')}}</li>
                      <li> {{link_to_route('participants.create', 'Ajouter un nouvel participant')}}</li>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestion de l'hébergement</h3>
                </div>
                <div class="panel-body">
                  <ul>
                      <li> {{link_to_route('hebergements.index', 'Liste des hébergements')}}</li>
                      <li> {{link_to_route('hebergements.create', 'Créer un nouvel hébergement')}}</li>
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestion des projections</h3>
                </div>
                <div class="panel-body">
                  <ul>
                      <li> {{link_to_route('projections.index', 'Liste des projections')}}</li>
                      <li> {{link_to_route('projections.create', 'Ajouter une projection')}}</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
@stop
