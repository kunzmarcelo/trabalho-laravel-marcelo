@extends('base')


@section('title')
    Usuário: {{$team->name}}
@stop


@section('content')
    <table class="tabela tabela-borda">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Nome Responsavel</th>
                
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->name}}</td>
                <td>{{ $team->responsable}}</td>
                
            </tr>
        </tbody>
    </table>
@stop