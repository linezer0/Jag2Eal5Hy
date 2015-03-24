@extends('layouts.master')

@section('title')
    Créer une nouvelle chambre
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Chambre creation page
@stop

@section('content')

    <h1>Créer une nouvelle chambre</h1>
    {{ Form::open(['route' => 'chambres.store']) }}
    <div class="form-group">
        {{ Form::label('hebergement', 'Hébergement de cette chambre') }}
        {{ Form::select('hebergement', $hebergements, null, ['class' => 'form-control']) }}
        {{ $errors->first('hebergement') }}
    </div>

        <div class="form-group">
            {{ Form::label('libelle', 'Le libelle') }}
            {{ Form::text('libelle', Input::old('libelle'), ['class' => 'form-control', 'placeholder' => ''] ) }}
            {{ $errors->first('libelle') }}
        </div>
        <div class="form-group">
            {{ Form::label('capacite', 'Capacite') }}
            {{ Form::text('capacite', Input::old('capacite'), ['class' => 'form-control', 'placeholder' => ''] ) }}
            {{ $errors->first('capacite') }}
        </div>


        <div class="form-group">
            {{ Form::label('type_chambre', 'Type de la chambre') }}
            {{ Form::select('type_chambre', Chambre::$type_chambre,'', ['class' => 'form-control'] ) }}
            {{ $errors->first('type_chambre') }}
        </div>

        <div class="form-group">
            {{ Form::label('prix_chambre', 'Prix de la chambre(€)') }}
            {{ Form::text('prix_chambre', Input::old('prix_chambre'), ['class' => 'form-control','placeholder' => ''] ) }}
            {{ $errors->first('prix_chambre') }}
        </div>

        <div class="form-group">
            {{ Form::token(); }}

            {{ Form::submit('Créer chambre', array('class' => 'btn btn-primary')) }}
        </div>


@stop
