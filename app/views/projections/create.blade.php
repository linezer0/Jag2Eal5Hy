@extends('layouts.master')

@section('title')
    Nouvelle projection
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Projection creation page
@stop

@section('content')

    <h1>Créer une nouvelle projection</h1>
    {{ Form::open(['route' => 'projections.store']) }}
    <div class="form-group">
        {{ Form::label('film', 'Film à projeter') }}
        {{ Form::select('film', $movies, null, ['class' => 'form-control']) }}
        {{ $errors->first('film') }}
    </div>

    <div class="form-group">
        {{ Form::label('salle', 'Salle de projection') }}
        {{ Form::select('salle', $salles, null, ['class' => 'form-control']) }}
        {{ $errors->first('salle') }}
    </div>

    <div class="form-group">
        {{ Form::label('date_seance', 'Date désirée') }}
        {{ Form::select('date_seance', $jours, null, ['class' => 'form-control']) }}
        {{ $errors->first('date_seance') }}
    </div>


    <div class="form-group">
        {{ Form::label('heure_debut', 'Début de séance') }}
        {{ Form::text('heure_debut', Input::old('heure_debut'), ['class' => 'form-control','placeholder' => '12:00'] ) }}
        {{ $errors->first('heure_debut') }}
    </div>

    <div class="form-group">
        {{ Form::label('heure_fin', 'Fin de séance') }}
        {{ Form::text('heure_fin', Input::old('heure_fin'), ['class' => 'form-control','placeholder' => '13:00'] ) }}
        {{ $errors->first('heure_fin') }}
    </div>

    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Créer projection', array('class' => 'btn btn-primary')) }}
    </div>
@stop