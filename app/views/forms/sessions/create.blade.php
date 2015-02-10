<h1>Se connecter à la plateforme</h1>
{{ Form::open(['route' => 'sessions.store']) }}
<div class="form-group">
    {{ Form::label('username', 'Nom d\'utilisateur') }}
    {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'jeandurand'] ) }}
    {{ $errors->first('username') }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Mot de passe') }}
    {{ Form::password('password', ['class' => 'form-control']) }}
    {{ $errors->first('password') }}
</div>

<div class="form-group">
    {{ Form::token(); }}
    {{ Form::submit('S\'identifier', array('class' => 'btn btn-primary')) }}
</div>