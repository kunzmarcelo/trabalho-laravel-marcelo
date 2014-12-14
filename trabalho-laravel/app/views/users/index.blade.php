@extends('base')

@section('title')
	Lista de Usuários
@stop

@section('content')
<table class="tabela-borda">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Sobrenome</th>			
			<th>E-mail</th>			
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	@if ($users)
		@foreach ($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
			<td>{{$user->surname}}</td>			
			<td>{{$user->email}}</td>
			
			<td><a href="/users/{{ $user->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['users.destroy',$user->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar') }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop