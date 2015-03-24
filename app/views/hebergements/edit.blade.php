@extends('layouts.master')

@section('title')
Edit hebergement
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Hebergement edit page
@stop

@section('content')


    <h1>Modifier un hébergment</h1>
    {{ Form::open(array('route' => array('hebergements.update', $hebergement->no_siret), 'method' => 'put')) }}
    <div class="form-group">
        {{ Form::label('etoiles', 'Nombre d\'étoiles') }}
        {{ Form::select('etoiles', Hebergement::$etoiles,$hebergement->etoiles, ['class' => 'form-control'] ) }}
        {{ $errors->first('etoiles') }}
    </div>

    <div class="form-group">
      {{ Form::label('nom_contact', 'Changement du contact') }}
      {{ Form::text('nom_contact', $hebergement->nom_contact, ['class' => 'form-control']) }}
      {{ $errors->first('nom_contact') }}

    </div>

    <div class="form-group">
      {{ Form::label('mail_contact', 'Changement du mail du contact') }}
      {{ Form::text('mail_contact', $hebergement->mail_contact, ['class' => 'form-control']) }}
      {{ $errors->first('mail_contact') }}

    </div>


    <div class="form-group">
        {{ Form::token(); }}
        {{ Form::submit('Modifier hébergement', array('class' => 'btn btn-primary')) }}
    </div>
@stop
