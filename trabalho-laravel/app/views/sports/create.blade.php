@extends('base')


@section('title')
    Cadastro de Esportes
@stop


@section('content')
     {{ Form::open(['route' => 'sports.store', 'method'=>'post']) }}
     <div>
            {{ Form::label('description', 'Descrição') }}
            {{ Form::text('description') }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Cadastrar')}}
        </div>
    {{ Form::close() }}
@stop