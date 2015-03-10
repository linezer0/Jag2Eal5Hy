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
        {{ Form::label('date_projection', 'Date désirée') }}
        {{ Form::select('date_projection', $jours, null, ['class' => 'form-control']) }}
        {{ $errors->first('date_projection') }}
    </div>

    <div class="form-group">
        {{ Form::label('creneau', 'Créneau') }}
        {{ Form::select('creneau', $creneaux, null, ['class' => 'form-control']) }}
        {{ $errors->first('creneau') }}
    </div>

    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Créer projection', array('class' => 'btn btn-primary')) }}
    </div>
@stop