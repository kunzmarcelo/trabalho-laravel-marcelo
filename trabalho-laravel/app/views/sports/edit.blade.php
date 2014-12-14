@extends('base')

@section('title')
Editar Esportes
@stop


@section('content')
   <div class="painel">
    {{ Form::model($sports, ['route' => ['sports.update',$sports->id], 'method'=>'put']) }}
           
           <div>
            {{ Form::label('description', 'Descrição') }}
            {{ Form::text('description',null,array('class'=>'form-caixa-texto')) }}
            <!--{{ $errors->first('name') }}-->
        </div>
         <div>
            {{Form::submit('Salvar',array('class'=>'botao'))}}
        </div>
    {{ Form::close() }}
</div>
@stop