@extends('base')

@section('title')
Editar Esportes
@stop


@section('content')
    {{ Form::model($sports, ['route' => ['sports.update',$sports->id], 'method'=>'put']) }}
           
           <div>
            {{ Form::label('description', 'Descrição') }}
            {{ Form::text('description') }}
            <!--{{ $errors->first('name') }}-->
        </div>
         <div>
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
@stop