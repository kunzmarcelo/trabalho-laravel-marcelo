@extends('base')


@section('title')
    Cadastro de Atletas
@stop


@section('content')
    {{ Form::open(['route' => 'athlete.store', 'method'=>'post']) }}
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
            {{ Form::label('city', 'Cidade') }}
            {{ Form::select('city',$cities) }}
            {{ $errors->first('name') }} 
        </div>
       
        <div>
            {{Form::submit('Cadastrar')}}
        </div>
    {{ Form::close() }}
@stop