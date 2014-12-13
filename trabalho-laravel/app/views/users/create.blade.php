@extends('base')


@section('title')
    Cadastro de Usuário
@stop


@section('content')
      {{ Form::open(['route' => 'users.store', 'method'=>'post']) }}
        <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name') }}
            {{ $errors->first('name') }}
            </div>
        <div>
            {{ Form::label('surname', 'Sobrenome') }}
            {{ Form::text('surname') }} 
            {{ $errors->first('surname') }}           
        </div>        
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::input('email','email') }}
            {{ $errors->first('email') }}
        </div>
        <div>
            {{ Form::label('password', 'Senha') }}
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
        <div>
            {{Form::submit('cadastrar')}}
        </div>
    {{ Form::close() }}
@stop