<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css" />
	<link rel="stylesheet" type="text/css" href="/css/estilo.css" />
	<title>Controle de estoque</title>
</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-default">
		    <div class="container-fluid">

		    <div class="navbar-header">      
		      <a class="navbar-brand" href="/">Estoque Laravel :: HOME</a>
		    </div>

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/produtos">Listagem</a></li>
		        <li><a href="/produtos/novo">Novo</a></li>
		        <li><a href="/produtos/retornaJson">Json</a></li>
		      </ul>

		    </div>
		  </nav>

			@yield('conteudo')
		
			<footer class="footer">
		      <p>© Curso de Laravel do Alura.</p>
		  </footer>
		
		</div>
	</body>
</html>