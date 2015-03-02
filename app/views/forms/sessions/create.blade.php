<h1>Se connecter à la plateforme</h1>
{{ Form::open(['route' => 'sessions.store']) }}
<div class="form-group">
    {{ Form::label('email', 'Adresse mail') }}
    {{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'exemple@mail.fr'] ) }}
    {{ $errors->first('email') }}
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
