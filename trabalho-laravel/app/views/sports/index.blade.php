@extends('base')

@section('title')
	Lista de Esportes
@stop

@section('content')
<table class="tabela tabela-borda">
	<thead>
		<tr>
			<th>#</th>
			<th>Descrição</th>			
			<th>Criado em</th>
			<th>Alterado em</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	
@if ($sports)
		@foreach ($sports as $sports)
		<tr>
			<td>{{$sports->id}}</td>
			<td><a href="/sports/{{$sports->id}}">{{$sports->description}}</a></td>			
			<td>{{$sports->created_at}}</td>
			<td>{{$sports->updated_at}}</td>
			<td><a href="/sports/{{ $sports->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['sports.destroy',$sports->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar') }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop