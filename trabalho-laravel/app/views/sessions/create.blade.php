@extends('base')

@section('title')
    Login do Usuário
@stop

@section('content')
    {{ Form::open([ 'route'=>'sessions.store','method'=>'post' ]) }}
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::email('email') }}
        </div>
        <div>
            {{ Form::label('passowrd', 'Senha') }}
            {{ Form::password('password') }}
        </div>
        <div>
            {{ Form::submit('logar') }}
        </div>
    {{ Form::close() }}
@stop