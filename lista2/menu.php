<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/menu.css">

	</head>


	<body>
		
		<!--navegação topo-->
		<nav class="navbar navbar-expand-lg cor-barra">
			<a class="navbar-brand" href="index.php">
				Listable <img src="img/img-titulo.png" height="30">
			</a>


			<div class="collapse navbar-collapse sub-nav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<img src="img/user.png">
					</li>

					<li class="nav-item">
						<h6>Usuário: <!--ADICIONAR CODIGO PHP--></h6>
					</li>
				</ul>
			</div>
		</nav><!--Fim navegação topo-->



		<!--Barra de navegação lateral-->
		<article>

			<div class="parte-usuario">
				<img src="img/imgok.png">
				<!--COLOCAR NOME DO USUARIO PHP-->
			</div>

			<div class="adicionar">
				<a href="adicionar_tarefa.php"><img src="img/add_tarefa.png">Adicionar Tarefa</a>
			</div>

			<div class="consultar">
				<a href="consultar_tarefa.php"><img src="img/ok.png">Consultar Tarefa</a>
			</div>


			<!--encerrar sessão-->
			<div class="encerrar">
				<a href="#"><img src="img/desligar.png">
					<h6><a href="logoff.php">Sair</a></h6>
				</a>
			</div>
		</article><!--Fim barra de navegação lateral-->


		

		<!-- JavaScript (Opcional) -->
	    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	
</html>