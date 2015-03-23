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

    <h1>Modifier une projection</h1>
    {{ Form::open(array('route' => array('projections.update', $projection->id), 'method' => 'put')) }}
    <div class="form-group">
        {{ Form::label('film', 'Film à projeter') }}
        {{ Form::select('film', $movies, $projection->film->id, ['class' => 'form-control']) }}
        {{ $errors->first('film') }}
    </div>

    <div class="form-group">
        {{ Form::label('salle', 'Salle de projection') }}
        {{ Form::select('salle', $salles, $projection->salle->id, ['class' => 'form-control']) }}
        {{ $errors->first('salle') }}
    </div>

    <div class="form-group">
        {{ Form::label('date_projection', 'Date désirée') }}
        {{ Form::select('date_projection', $jours, date_format(date_create($projection->date_projection), 'd-m-Y'), ['class' => 'form-control']) }}
        {{ $errors->first('date_projection') }}
    </div>

    <div class="form-group">
        {{ Form::label('creneau', 'Créneau') }}
        {{ Form::select('creneau', $creneaux, $projection->creneau, ['class' => 'form-control']) }}
        {{ $errors->first('creneau') }}
    </div>

    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Modifier projection', array('class' => 'btn btn-primary')) }}
    </div>
@stop
