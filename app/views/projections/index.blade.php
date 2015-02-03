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

    <h1>Toutes les projections</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Heure début</th>
                <th>Heure fin</th>
                <th>Salle</th>
                <th>Film</th>
            </tr>
        </thead>
        <tbody>
        @foreach
        </tbody>

    </table>
@stop