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

	<form action="/login" method="POST">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<div class="form-group">
			<label for="email">E-mail</label>
			<input class="form-control" type="text" name="email" id="email">
		</div>

		<div class="form-group">
			<label for="password">Senha</label>
			<input class="form-control" type="password" name="password" id="password">
		</div>

		<button type="submit" class="btn btn-success">Login</button>

	</form>

@stop