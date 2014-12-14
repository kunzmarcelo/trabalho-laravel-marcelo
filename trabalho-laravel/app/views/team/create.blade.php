@extends('base')


@section('title')
    Cadastro de Times
@stop

@section('content')
   <div class="painel"> 
    {{ Form::open(['route' => 'team.store', 'method'=>'post','class'=>'form']) }}
         <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name',null,array('class'=>'form-caixa-texto')) }}          
        </div>
         <div>
            {{ Form::label('responsable', 'Responsável') }}
            {{ Form::text('responsable',null,array('class'=>'form-caixa-texto')) }}          
        </div>
        <div>
            {{ Form::hidden('sports', 'Esportes') }}
            {{ Form::hidden('sports',1,array('class'=>'form-caixa-texto')) }}          
        </div>
        
        <div class="botao">
            {{Form::submit('Cadastrar', array('class'=>'botao'))}}
        </div>
    {{ Form::close() }}
</div>
@stop