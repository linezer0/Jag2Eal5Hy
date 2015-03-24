@extends('layouts.master')

@section('title')
    Créer un nouvel hébergement
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Hebergement creation page
@stop

@section('content')

    <h1>Créer un nouvel hébergement</h1>
    {{ Form::open(['route' => 'hebergements.store']) }}
        <div class="form-group">
            {{ Form::label('no_siret', 'Le numéro de siret') }}
            {{ Form::text('no_siret', Input::old('no_siret'), ['class' => 'form-control', 'placeholder' => ''] ) }}
            {{ $errors->first('no_siret') }}
        </div>
        <div class="form-group">
            {{ Form::label('nom', 'Nom de l\'hébergement') }}
            {{ Form::text('nom', Input::old('nom'), ['class' => 'form-control', 'placeholder' => ''] ) }}
            {{ $errors->first('nom') }}
        </div>
        <div class="form-group">
            {{ Form::label('adresse', 'adresse') }}
            {{ Form::text('adresse', Input::old('adresse'), ['class' => 'form-control','placeholder' => '14 rue Ferranvière 29200 BREST'] ) }}
            {{ $errors->first('adresse') }}
        </div>

        <div class="form-group">
            {{ Form::label('etoiles', 'Nombre d\'étoiles') }}
            {{ Form::select('etoiles', Hebergement::$etoiles,'', ['class' => 'form-control'] ) }}
            {{ $errors->first('etoiles') }}
        </div>
        <div class="form-group">
            {{ Form::label('type_hebergement', 'Le type de l\'hébergement') }}
            {{ Form::select('type_hebergement', Hebergement::$type_hebergement,'', ['class' => 'form-control'] ) }}
            {{ $errors->first('type_hebergement') }}
        </div>


        <div class="form-group">
          {{ Form::label('services', 'Service proposé') }} <br>
          @foreach ($services as $id => $libelle)
            {{ Form::label($libelle)}}
            {{ Form::checkbox('services[]', $id, true)}}
          @endforeach
          {{ $errors->first('services') }}
        </div>
        <div class="form-group">
            {{ Form::label('nom_contact', 'Nom du contact') }}
            {{ Form::text('nom_contact', Input::old('nom_contact'), ['class' => 'form-control','placeholder' => ''] ) }}
            {{ $errors->first('nom_contact') }}
        </div>
        <div class="form-group">
            {{ Form::label('mail_contact', 'Email du contact') }}
            {{ Form::text('mail_contact', Input::old('mail_contact'), ['class' => 'form-control','placeholder' => 'jean.durand@iaelyon.fr'] ) }}
            {{ $errors->first('mail_contact') }}
        </div>
        <div class="form-group">
            {{ Form::token(); }}

            {{ Form::submit('Créer hébergement', array('class' => 'btn btn-primary')) }}
        </div>


@stop
