@extends('base')


@section('title')
    Cadastro de Cidades
@stop



@section('content')
    <div class="painel"> 
     {{ Form::open(['route' => 'city.store', 'method'=>'post', 'class'=>'form']) }}
     <div>
            {{ Form::label('name', 'Nome:' , array('class'=>'label')) }}
            {{ Form::text('name', null,array('class'=>'form-caixa-texto')) }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Cadastrar',array('class'=>'botao botao-sucesso'))}}
        </div>
    {{ Form::close() }}
    </div>
@stop 


