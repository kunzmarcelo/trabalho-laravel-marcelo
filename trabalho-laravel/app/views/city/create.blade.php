@extends('base')


@section('title')
    Cadastro de Cidades
@stop


@section('content')
     {{ Form::open(['route' => 'city.store', 'method'=>'post']) }}
     <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name') }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Cadastrar')}}
        </div>
    {{ Form::close() }}
@stop