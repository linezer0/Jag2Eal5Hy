@extends('layouts.master')

@section('title')
    Sélectionnez les dates de votre séjour
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Booking creation page
@stop

@section('content')
    <h1>Dates et hôtel</h1>
    <h3>Sélectionnez les dates auxquelles vous désirez être hébergé et l'établissement qui vous accueillera.</h3>

    {{ Form::open(['route' => ['participants.reservations.selectChambre', Auth::user()->participant->id]]) }}
    <div class="form-group">
        {{ Form::label('date_debut', 'Date d\'arrivée') }}
        {{ Form::select('date_debut', $jours, null, ['class' => 'form-control']) }}
        {{ $errors->first('date_debut') }}
    </div>
    <div class="form-group">
        {{ Form::label('date_fin', 'Date de départ') }}
        {{ Form::select('date_fin', $jours, null, ['class' => 'form-control']) }}
        {{ $errors->first('date_fin') }}
    </div>

    <div class="form-group">
        {{ Form::label('hotel', 'Hôtel') }}
        {{ Form::select('hotel', $hotels, null, ['class' => 'form-control']) }}
        {{ $errors->first('hotel') }}
    </div>

    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Rechercher les chambres', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
@stop