@extends('base')

@section('title')
Editar Cidades
@stop


@section('content')
    {{ Form::model($city, ['route' => ['city.update',$city->id], 'method'=>'put']) }}
     <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name') }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
@stop