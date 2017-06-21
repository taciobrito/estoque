@extends('principal')

@section('conteudo')
	<h2>Listagem de Produtos</h2>

	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			<th>Tamanho</th>
			<th>Categoria</th>
			<th>Ações</th>
		</tr>

		@foreach ($produtos as $produto)
			<tr class="{{ $produto->quantidade <=1 ? 'danger text-danger' : '' }}">
				<td>{{$produto->nome}}</td>
				<td>{{$produto->valor}}</td>
				<td>{{$produto->descricao}}</td>
				<td>{{$produto->quantidade}}</td>
				<td>{{$produto->tamanho}}</td>
				<td>{{$produto->categoria->nome}}</td>
				<td>
					<a href="/produtos/mostra/{{$produto->id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="/produtos/remove/{{$produto->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr>
		@endforeach
	</table>
@stop