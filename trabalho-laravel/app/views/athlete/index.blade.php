@extends('base')

@section('title')
	Lista de Usuários
@stop

@section('content')
<table class="tabela tabela-borda">
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Data de Nascimento</th>
			<th>E-mail</th>			
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	@if ($athletes)
		@foreach ($athletes as $athlete)
		<tr>
			<td>{{$athlete->id}}</td>
			<td><a href="/athlete/{{$athlete->id}}">{{$athlete->name}}</a></td>			
			<td>{{$athlete->birth_date}}</td>			
			<td>{{$athlete->email}}</td>			
			<td><a href="/athlete/{{ $athlete->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['athlete.destroy',$athlete->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar', array('class'=>'botao botao-sucesso')) }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop