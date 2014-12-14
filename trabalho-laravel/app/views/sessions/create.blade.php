@extends('base')

@section('title')
    Login do Usuário
@stop

@section('content')
    {{ Form::open([ 'route'=>'sessions.store','method'=>'post', 'class'=>'form' ]) }}
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::email('email',null,array('class'=>'form-caixa-texto')) }}
        </div>
        <div>
            {{ Form::label('passowrd', 'Senha') }}
            {{ Form::password('password',array('class'=>'form-caixa-texto')) }}
        </div>
        <div>
            {{ Form::submit('logar',array('class'=>'botao botao-sucesso')) }}
        </div>
    {{ Form::close() }}
@stop