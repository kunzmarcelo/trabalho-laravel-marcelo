@extends('base')


@section('title')
    Usuário: {{$athlete->name}}
@stop


@section('content')
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>               
                <th>E-mail</th>                                       
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>{{ $athlete->id }}</td>
                <td>{{ $athlete->name}}</td>
                <td>{{ $athlete->email }}</td>
            </tr>
        </tbody>
    </table>
@stop