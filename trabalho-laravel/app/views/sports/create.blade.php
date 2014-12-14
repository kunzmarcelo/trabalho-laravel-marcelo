@extends('base')


@section('title')
    Cadastro de Esportes
@stop


@section('content')
    <div class="painel"> 
     {{ Form::open(['route' => 'sports.store', 'method'=>'post','class'=>'form']) }}
     <div>
            {{ Form::label('description', 'Descrição') }}
            {{ Form::text('description',null,array('class'=>'form-caixa-texto')) }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Cadastrar',array('class'=>'botao'))}}
        </div>
    {{ Form::close() }}
</div>
@stop