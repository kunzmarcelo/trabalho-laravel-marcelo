@extends('base')


@section('title')
    Usuário: {{$sports->name}}
@stop


@section('content')
    <table class="tabela tabela-borda">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>                
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>{{ $sports->id }}</td>
                <td>{{ $sports->description}}</td>                
            </tr>
        </tbody>
    </table>
@stop