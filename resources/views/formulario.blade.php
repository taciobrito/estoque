@extends('principal')

@section('conteudo')

	@if( count( $errors->all() ) > 0 )
		<div class="alert alert-danger">
			<ul>
				@foreach( $errors->all() as $error )
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/produtos/salvar" method="POST">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<div class="form-group">
			<label for="nome">Nome</label>
			<input class="form-control" type="text" name="nome" id="nome">
		</div>

		<div class="form-group">
			<label for="valor">Valor</label>
			<input class="form-control" type="text" name="valor" id="valor">
		</div>

		<div class="form-group">
			<label for="quantidade">Quantidade</label>
			<input class="form-control" type="text" name="quantidade" id="quantidade">
		</div>

		<div class="form-group">
			<label for="tamanho">Tamanho</label>
			<input class="form-control" type="text" name="tamanho" id="tamanho">
		</div>

		<div class="form-group">
			<label for="categoria_id">Categoria</label>
			<select class="form-control" name="categoria_id" id="categoria_id">
				<option value="">Selecione a Categoria</option>
				@foreach( $categorias as $categoria )
					<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input class="form-control" type="text" name="descricao" id="descricao">
		</div>

		<button type="submit" class="btn btn-primary">Salvar</button>

	</form>

@stop