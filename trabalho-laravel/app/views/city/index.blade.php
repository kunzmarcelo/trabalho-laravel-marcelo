@extends('base')

@section('title')
	Lista de Cidades
@stop

@section('content')
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>			
			<th>Criado em</th>
			<th>Alterado em</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	
@if ($city)
		@foreach ($city as $city)
		<tr>
			<td>{{$city->id}}</td>
			<td><a href="/city/{{$city->id}}">{{$city->name}}</a></td>			
			<td>{{$city->created_at}}</td>
			<td>{{$city->updated_at}}</td>
			<td><a href="/city/{{ $city->id }}/edit">Editar</a></td>
			<td>
			    {{ Form::open(['route'=>['city.destroy',$city->id],'method'=>'delete']) }}
                    {{ Form::submit('Deletar') }}
			    {{ Form::close() }}
			 </td>
		</tr>
		@endforeach
	@endif
	</tbody>
</table>
@stop