@extends('layouts.master')

@section('title')
    Créer un compte
@stop

@section('author')
    thomasparker
@stop

@section('description')
    User creation page
@stop

@section('content')
    <h1>Créer un nouvel utilisateur à partir d'une demande d'accès</h1>
    {{ Form::open() }}
    <div class="form-group">
        {{ Form::label('username', 'Nom d\'utilisateur') }}
        {{ Form::text('username', $username, ['class' => 'form-control', 'placeholder' => 'jeandurand'] ) }}
        {{ $errors->first('username') }}
    </div>

    <div class="form-group">
        {{ Form::label('prenom', 'Prénom') }}
        {{ Form::text('prenom', $accessrequest->prenom, ['class' => 'form-control', 'placeholder' => 'Jean', 'readonly' => 'readonly'] ) }}
        {{ $errors->first('prenom') }}
    </div>
    <div class="form-group">
        {{ Form::label('nom', 'Nom de de famille') }}
        {{ Form::text('nom', $accessrequest->prenom, ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
        {{ $errors->first('nom') }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Adresse mail') }}
        {{ Form::text('email', $accessrequest->email, ['class' => 'form-control', 'readonly' => 'readonly'] ) }}
        {{ $errors->first('email') }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Mot de passe') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
        {{ $errors->first('password') }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Confirmer mot de passe') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        {{ $errors->first('password_confirmation') }}
    </div>
    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Créer compte', array('class' => 'btn btn-primary')) }}
    </div>
@stop