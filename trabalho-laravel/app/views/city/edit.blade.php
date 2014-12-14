@extends('base')

@section('title')
Editar Cidades
@stop


@section('content')
   <div class="painel">
    {{ Form::model($city, ['route' => ['city.update',$city->id], 'method'=>'put']) }}
     <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name',null,array('class'=>'form-caixa-texto')) }}
            <!--{{ $errors->first('name') }}-->
        </div>
          <div>
            {{Form::submit('Salvar', array('class'=>'botao'))}}
        </div>
    {{ Form::close() }}
</div>
@stop