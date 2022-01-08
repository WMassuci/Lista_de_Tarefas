<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/estilo1.css">

		<title>Listable</title>
	</head>

	<body>

		<!--Cabeçalho-->
		<header>
			<nav class="navbar navbar-expand-lg cor-nav">
				<a class="navbar-brand" href="index.php">Listable<img src="img/img-titulo.png" height="30"></a></h2>
			</nav>
		</header><!--Fim cabeçalho-->


		<!--Seção Cabeçalho 2-->
		<section id="cabecalho2">
			<div class="container">
				<div class="row">

					<!--Texto-->
					<div class="col-md-6  secao-texto">
						<h1 class="titulo-texto">Listable: Organize suas tarefas e compromissos online</h1>

						<img class="img-rotate" src="img/img-cab.png">
					</div><!--Fim texto-->



					<!--Login-->
					<div class="col-md-6  secao-login">
						<div class="card" style="width: 18rem;">

							<h4 class="card-title texto-login"><img src="img/img-senha.png"></h4>

							<div class="card-body">
								<form method="POST" action="valida_login.php">
									<div class="form-group">
										<label for="email1"></label>
										<input name="email" type="email" class="form-control" id="email1" placeholder="Seu Email: " required="" />
									</div>


									<div class="form-group">
										<label for="senha"></label>
										<input name="senha" type="password" class="form-control" id="senha" placeholder="Sua Senha: " required="">
									</div>


									<? if(isset($_GET['login']) && $_GET['login'] == 'erro') {; ?>

										<div class="text-danger">
											*Usuário Inválido!
										</div>

									<? } ?>



									<? if(isset($_GET['login']) && $_GET['login'] == 'erro2') {; ?>

										<div class="text-danger">
											*Falha na autentificação!
										</div>

									<? } ?>
									<button class="btn btn-success botao" type="submit">Entrar</button>
								</form>
							</div>
						</div>
					</div><!--Fim login-->
				</div>
			</div>
		</section><!--Fim cabeçalho 2-->





		<!--Seção sobre a list-->
		<section id="sobre">
			<div class="container">
				<div class="row">
					<div class="col-md-4 texto-1">
						<img src="img/img1.png">
						<h5 class="t-1">Organize suas Tarefas</h5>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>


					<div class="col-md-4 texto-2">
						<img src="img/img2.png">
						<h5 class="t-1">Não perca seu Tempo</h5>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
					</div>


					<div class="col-md-4 texto-3">
						<img src="img/img3.png">

						<h5 class="t-1">Simples e Fácil</h5>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
		</section><!--Fim da seção-->



		<!-- JavaScript (Opcional) -->
	    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>