@extends('base')

@section('title')
Editar Atletas
@stop


@section('content')
   <div class="painel">
    <!--{{ Form::model($athlete, ['route' => ['athlete.update',$athlete->id], 'method'=>'put']) }}-->
    {{ Form::model($athlete, ['route' => ['athlete.update',$athlete->id], 'method'=>'put', 'class'=>'form']) }}
        <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name',null,array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('name') }}
        </div>
         <div>
            {{ Form::label('address', 'Endereço') }}
            {{ Form::text('address',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('address') }} 
        </div>
        
            <div>
            {{ Form::label('birth_date', 'Data de Nascimento') }}
            {{ Form::input('date','birth_date',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('birth_date') }}
        </div>
        
        <div>
            {{ Form::label('phone', 'Telefone') }}
            {{ Form::input('number','phone',null,array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('name') }} 
        </div>
                
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::input('email','email',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('email') }}
        </div>
        
        <div>
            {{ Form::label('CPF', 'CPF') }}
            {{ Form::text('CPF',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('name') }}
        </div>
        
        <div>
            {{ Form::label('RG', 'RG') }}
            {{ Form::text('RG',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('name') }} 
        </div>
        
        <div>
            {{ Form::label('burg', 'bairro') }}
            {{ Form::text('burg',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('name') }} 
        </div>
        
        <div>
            {{ Form::label('sex', 'sexo') }}
            {{ Form::text('sex',null,array('class'=>'form-caixa-texto')) }}
             {{ $errors->first('name') }}
        </div>
       
       <div>
            {{ Form::label('name_father', 'Nome do pai') }}
            {{ Form::text('name_father',null,array('class'=>'form-caixa-texto')) }}
            <!-- {{ $errors->first('name') }} -->
        </div>
        
        <div>
            {{ Form::label('name_mother', 'Nome da Mãe') }}
            {{ Form::text('name_mother',null,array('class'=>'form-caixa-texto')) }}
            {{ $errors->first('name') }} 
        </div>              
              
        <div>
            {{Form::submit('Salvar',array('class'=>'botao'))}}
        </div>
    {{ Form::close() }}
</div>
@stop