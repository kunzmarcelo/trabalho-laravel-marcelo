@extends('base')

@section('title')
Editar Time
@stop


@section('content')
    {{ Form::model($team, ['route' => ['team.update',$team->id], 'method'=>'put']) }}
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
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
@stop