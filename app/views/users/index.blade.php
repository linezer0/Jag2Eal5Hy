@extends('layouts.master')

@section('title')
    Liste des utilisateurs
@stop

@section('author')
    thomasparker
@stop

@section('description')
    User list
@stop

@section('content')
    <h1>Liste des utilisateurs</h1>
    <?php $striped = true; ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                 @if($striped)
                    <tr class = "table-striped">
                    <?php $striped = false; ?>
                @else
                   <?php $striped = true; ?>
                    <tr>
                @endif
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop