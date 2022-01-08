
<?php

	require_once "valida_acesso.php";

?>



<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/adicionar.css">

		<title>Adicionar Tarefa!</title>
	</head>


	<body>

		<!--Cabeçalho-->
		<?php
			require_once "menu.php";
		?><!--Fim cabeçalho-->



		<!--Seção adicionar-->
		<section id="adicionar">
			
			<form method="POST" action="registra_tarefa.php">
				<div class="form-group">
					<label for="nome_tarefa"></label>
					<input class="tarefa form-control" type="text" id="nome_tarefa" name="tarefa" placeholder="Nova Tarefa" required="">
					<div id="tarefahelp" class="form-text  texto-aviso">*Informe corretamente o nome da tarefa!</div>
				</div>


				<div class="form-group">
					<label for="data-tarefa" class="texto-data">Selecione a Data</label>
					<input type="date" id="data-tarefa" name="data" class="area-data form-control" required="">
				</div>


				<div class="form-floating">
					<label for="floatingTextarea" class="area-comentario">Observação</label>
					<textarea name="obs" class="form-control area-comentario2" placeholder="Alguma Observação?" id="floatingTextarea" style="height: 100px;"></textarea>
				</div>


				<div class="botao1">
					<button class="btn btn-success botao-adicionar" type="submit">Adicionar</button>
				</div>
				
				<div class="botao2">
					<a href="home.php" class="btn btn-warning  botao-voltar">Voltar</a>
				</div>
			</form>
		</section><!--Fim seção adicionar-->


		<!-- JavaScript (Opcional) -->
	    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>