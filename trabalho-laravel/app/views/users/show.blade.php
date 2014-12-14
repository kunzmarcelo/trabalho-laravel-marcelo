@extends('base')


@section('title')
    Usuário: {{$user->name}}
@stop


@section('content')
    <table class="tabela-borda">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Sobrenome</th>                
                <th>E-mail</th>                                       
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->surname }}</td>                
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>
@stop