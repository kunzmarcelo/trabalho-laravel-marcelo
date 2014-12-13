@extends('base')

@section('title')
Editar Atletas
@stop


@section('content')
    <!--{{ Form::model($athlete, ['route' => ['athlete.update',$athlete->id], 'method'=>'put']) }}-->
    {{ Form::model($athlete, ['route' => ['athlete.update',$athlete->id], 'method'=>'put']) }}
        <div>
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name') }}
            {{ $errors->first('name') }}
        </div>
         <div>
            {{ Form::label('address', 'Endereço') }}
            {{ Form::text('address') }}
             {{ $errors->first('address') }} 
        </div>
        
            <div>
            {{ Form::label('birth_date', 'Data de Nascimento') }}
            {{ Form::input('date','birth_date') }}
             {{ $errors->first('birth_date') }}
        </div>
        
        <div>
            {{ Form::label('phone', 'Telefone') }}
            {{ Form::input('number','phone') }}
            {{ $errors->first('name') }} 
        </div>
                
        <div>
            {{ Form::label('email', 'E-mail') }}
            {{ Form::input('email','email') }}
             {{ $errors->first('email') }}
        </div>
        
        <div>
            {{ Form::label('CPF', 'CPF') }}
            {{ Form::text('CPF') }}
             {{ $errors->first('name') }}
        </div>
        
        <div>
            {{ Form::label('RG', 'RG') }}
            {{ Form::text('RG') }}
             {{ $errors->first('name') }} 
        </div>
        
        <div>
            {{ Form::label('burg', 'bairro') }}
            {{ Form::text('burg') }}
             {{ $errors->first('name') }} 
        </div>
        
        <div>
            {{ Form::label('sex', 'sexo') }}
            {{ Form::text('sex') }}
             {{ $errors->first('name') }}
        </div>
       
       <div>
            {{ Form::label('name_father', 'Nome do pai') }}
            {{ Form::text('name_father') }}
            <!-- {{ $errors->first('name') }} -->
        </div>
        
        <div>
            {{ Form::label('name_mother', 'Nome da Mãe') }}
            {{ Form::text('name_mother') }}
            {{ $errors->first('name') }} 
        </div>
        <div>
            {{ Form::label('team', 'Equipe') }}
            {{ Form::text('team') }}
             {{ $errors->first('name') }} 
        </div>        
              
        <div>
            {{Form::submit('Salvar')}}
        </div>
    {{ Form::close() }}
@stop