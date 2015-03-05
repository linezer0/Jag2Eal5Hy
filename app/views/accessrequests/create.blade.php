@extends('layouts.master')

@section('title')
    Liste des demandes d'accès
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Access requests
@stop

@section('content')
    <h1>Faire une demande d'accès </h1>
    {{ Form::open(['route' => 'accessrequests.store']) }}
        <div class="form-group">
            {{ Form::label('nom', 'Nom') }}
            {{ Form::text('nom', '', ['class' => 'form-control']) }}
            {{ $errors->first('nom') }}
        </div>

        <div class="form-group">
            {{ Form::label('prenom', 'Prénom') }}
            {{ Form::text('prenom', '', ['class' => 'form-control']) }}
            {{ $errors->first('prenom') }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', '', ['class' => 'form-control']) }}
            {{ $errors->first('email') }}
        </div>
        <div class="form-group">
            {{ Form::label('date_naissance', 'Date de naissance') }}
            {{ Form::text('date_naissance', '', ['class' => 'form-control', 'placeholder' => 'ex: 01/01/2014'] ) }}
            {{ $errors->first('date_naissance') }}
        </div>

        <div class="form-group">
            {{ Form::label('role', 'Rôle') }}
            {{ Form::select('role', User::$roles, null, ['class' => 'form-control']) }}
            {{ $errors->first('role') }}
        </div>

        <div class="form-group">
            {{ Form::label('entreprise', 'Entreprise') }}
            {{ Form::text('entreprise', '', ['class' => 'form-control']) }}
            {{ $errors->first('entreprise') }}
        </div>

        <div class="form-group">
            {{ Form::label('justification', 'Justification') }}
            {{ Form::textarea('justification', '', ['class' => 'form-control']) }}
            {{ $errors->first('justification') }}
        </div>

        <div class="form-group">
            {{ Form::token(); }}
            {{ Form::submit('Faire une demande d\'accès ', array('class' => 'btn btn-primary')) }}
        </div>
    {{ Form::close() }}


@stop
