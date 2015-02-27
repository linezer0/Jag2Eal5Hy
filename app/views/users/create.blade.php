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

    <h1>Créer un nouvel utilisateur</h1>
    {{ Form::open(['route' => 'users.store']) }}
        <div class="form-group">
            {{ Form::label('username', 'Nom d\'utilisateur') }}
            {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'jeandurand'] ) }}
            {{ $errors->first('username') }}
        </div>
        <div class="form-group">
            {{ Form::label('prenom', 'Prénom') }}
            {{ Form::text('prenom', Input::old('prenom'), ['class' => 'form-control', 'placeholder' => 'Jean'] ) }}
            {{ $errors->first('prenom') }}
        </div>
        <div class="form-group">
            {{ Form::label('nom', 'Nom de de famille') }}
            {{ Form::text('nom', Input::old('nom'), ['class' => 'form-control', 'placeholder' => 'Durand'] ) }}
            {{ $errors->first('nom') }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Adresse mail') }}
            {{ Form::text('email', Input::old('email'), ['class' => 'form-control','placeholder' => 'jean.durand@iaelyon.fr'] ) }}
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