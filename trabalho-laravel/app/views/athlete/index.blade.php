@extends('base')

@section('title')
	Lista de Usuários
@stop

@section('content')
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Data de Nascimento</th>
			<th>E-mail</th>
			<th>Criado em</th>
			<th>Alterado em</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	@if ($athletes)
		@foreach ($athletes as $athlete)
		<tr>
			<td>{{$athlete->id}}</td>
			<td><a href="/athlete/{{$athlete->id}}">{{$athlete->name}}</a></td>			
			<td>{{$athlete->email}}</td>
			<td>{{$athlete->created_at}}</td>
			<td>{{$athlete->updated_at}}</td>
			<td><a href="/athlete/{{ $athlete->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['athlete.destroy',$athlete->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar') }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop