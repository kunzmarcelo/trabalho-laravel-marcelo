@extends('base')

@section('title')
    Editar Usuário
@stop


@section('content')
   <div class="painel">
    {{ Form::model($user, ['route' => ['users.update',$user->id], 'method'=>'put']) }}
        <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name',null,array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('name') }}
            </div>
        <div>
            {{ Form::label('surname', 'Sobrenome') }}
            {{ Form::text('surname',null,array('class'=>'form-caixa-texto')) }} 
            {{ $errors->first('surname') }}           
        </div>        
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::input('email','email',null,array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('email') }}
        </div>
        <div>
            {{ Form::label('password', 'Senha') }}
            {{ Form::password('password',array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('password') }}
        </div>
        <div>
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
</div>
@stop