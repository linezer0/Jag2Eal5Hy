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

    <h1>Créer un nouvel participant</h1>
    {{ Form::open(['route' => 'participants.store']) }}
    <div class="form-group">
        {{ Form::label('nom', 'Nom') }}
        {{ Form::text('nom', Input::old('nom'), ['class' => 'form-control', 'placeholder' => 'Durand'] ) }}
        {{ $errors->first('nom') }}
    </div>
    <div class="form-group">
        {{ Form::label('prenom', 'Prénom') }}
        {{ Form::text('prenom', Input::old('prenom'), ['class' => 'form-control', 'placeholder' => 'Jean'] ) }}
        {{ $errors->first('prenom') }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Adresse mail') }}
        {{ Form::text('email', Input::old('email'), ['class' => 'form-control','placeholder' => 'jean.durand@iaelyon.fr'] ) }}
        {{ $errors->first('email') }}
    </div>
    <div class="form-group">
        {{ Form::label('telephone', 'Téléphone') }}
        {{ Form::text('telephone', Input::old('telephone'), ['class' => 'form-control','placeholder' => '0101010101'] ) }}
        {{ $errors->first('telephone') }}
    </div>
    <div class="form-group">
        {{ Form::label('date_naissance', 'Date de naissance') }}
        {{ Form::text('date_naissance', '', ['class' => 'form-control', 'placeholder' => 'ex: 01/01/2014'] ) }}
        {{ $errors->first('date_naissance') }}
    </div>

    <div class="form-group">
        {{ Form::label('role', 'Rôle') }}
        {{ Form::select('role', User::$roles,'', ['class' => 'form-control'] ) }}
        {{ $errors->first('role') }}
    </div>

    <div class="form-group">
        {{ Form::label('niveau_accreditation', 'Niveau d\'accréditation') }}
        {{ Form::select('niveau_accreditation', Participant::$niveaux_accreditation,'', ['class' => 'form-control'] ) }}
        {{ $errors->first('niveau_accreditation') }}
    </div>
    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Créer participant', array('class' => 'btn btn-primary')) }}
    </div>
@stop
