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
    <p class="lead">WeCannes est l'application utilisée par le Festival de Cannes pour sa gestion interne.<br>Maintenant connecté, vous avez accès aux fonctionnalités relatives à la gestion de l'hébergement et des projections de films.</p>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestion des hébergements</h3>
                </div>
                <div class="panel-body">
                  <ul>
                      <li> {{link_to_route('participants.reservations.create', 'Réserver un hébergement', Auth::user()->participant->id)}}</li>
                      <li> {{link_to_route('participants.reservations.index', 'Liste des réservations', Auth::user()->participant->id)}}
                  </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestion des projections</h3>
                </div>
                <div class="panel-body">
                  <ul>
                      <li> {{link_to_route('participants.reservationProjections.create', 'Réserver des places', Auth::user()->participant->id)}}</li>
                      <li> {{link_to_route('participants.reservationProjections.index', 'Toutes mes réservations', Auth::user()->participant->id)}}</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
@stop
