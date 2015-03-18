@extends('layouts.master')

@section('title')
    Liste des demandes d'accès
@stop

@section('author')
    thomasparker
@stop

@section('description')
    Access requests
@stop

@section('content')
    <h1>Demande d'accès</h1>
    <h2>{{ $accessrequest->prenom }} {{ $accessrequest->nom }} travaille comme {{ $accessrequest->role }} à {{ $accessrequest->entreprise }}.</h2>
    <h3>Justification</h3>
    <h4>{{ $accessrequest->justification }}</h4>

    <a href="{{ route('accessrequests.createUser', ['accessrequestid' => $accessrequest->id]) }}"><button type="button" role="link" class="btn btn-success">Accepter </button></a>
@stop
