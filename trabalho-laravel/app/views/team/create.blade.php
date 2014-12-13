@extends('base')


@section('title')
    Cadastro de Times
@stop

@section('content')
    {{ Form::open(['route' => 'team.store', 'method'=>'post']) }}
         <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name') }}          
        </div>
         <div>
            {{ Form::label('responsable', 'Responsável') }}
            {{ Form::text('responsable') }}          
        </div>
        <div>
            {{ Form::label('sports', 'Esportes') }}
            {{ Form::text('sports') }}          
        </div>
        
        <div>
            {{Form::submit('Cadastrar')}}
        </div>
    {{ Form::close() }}
@stop