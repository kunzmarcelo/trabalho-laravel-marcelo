@extends('base')

@section('title')
Editar Time
@stop


@section('content')
   <div class="painel"> 
    {{ Form::model($team, ['route' => ['team.update',$team->id], 'method'=>'put', 'class'=>'form']) }}
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
            {{ Form::hidden('sports') }}          
        </div>
        <div>
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
</div>
@stop