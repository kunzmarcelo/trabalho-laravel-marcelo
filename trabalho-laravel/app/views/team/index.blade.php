@extends('base')

@section('title')
	Lista de Esportes
@stop

@section('content')
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>			
			<th>Responsavel</th>					
			<th>Esportes</th>
			<th>Alterado em</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	
@if ($team)
		@foreach ($team as $team)
		<tr>
			<td>{{$team->id}}</td>
			<td><a href="/team/{{$team->id}}">{{$team->name}}</a></td>			
			<td>{{$team->responsable}}</td>
			<td>{{$team->sports}}</td>
			<td>{{$team->created_at}}</td>
			<td>{{$team->updated_at}}</td>
			<td><a href="/team/{{ $team->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['team.destroy',$team->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar') }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop