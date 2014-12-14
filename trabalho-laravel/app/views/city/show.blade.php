@extends('base')


@section('title')
    Usuário: {{$city->name}}
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
                <td>{{ $city->id }}</td>
                <td>{{ $city->name}}</td>
                
            </tr>
        </tbody>
    </table>
@stop