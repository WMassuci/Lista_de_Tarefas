
<?php

	require_once "valida_acesso.php";

	$chamados = array();

	//abrir o arquivo.hd
	$arquivo = fopen('arquivo.txt', 'r');


	//utilizar a funcao 'while', por vai percorrer os dados enquanto tiver registros

	//funcao feof() = percorre o arquivo ate o final dele..
	while(!feof($arquivo)){ //sinal de negação para fazer o laço, se não logo de cara ele retorna false, e tem que ser true

		$registro = fgets($arquivo); //função que se ha dados naquela linha....
		$chamados[] = $registro; //atribuindo os dados que estao na variavel 'registro' para o array 'chamados'
	};



	fclose($arquivo); //fechar o arquivo aberto


	//echo '<pre>';
		//print_r($chamados);
	//echo '</pre>';
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/consultar.css">

		<title>Consultar Tarefa!</title>
	</head>

	<body>
		
		<!--Cabeçalho-->
		<?php
			require_once "menu.php";
		?><!--Fim cabeçalho-->


		<!--Seção consultar-->
		<section id="consultar">
			
			<div class="card">
				<h3 class="titulo-consultar">Consultar Tarefas!</h3>

				<div class="card-body">

					<?php foreach($chamados as $chamado) { ?>

					<?php
						$chamados_dados = explode('#', $chamado); //seprando os dados do indice '#'

						if(count($chamados_dados) < 3){

							continue; //nesse parte fiz, para que não aparece cards vazios, ele vai verificar se há 3 cards
						}
					?>

					<div class="card mb-3 bg-light">
						<h5 class="card-title">Nome da Tarefa: <span class="text-muted"><?= $chamados_dados[0] ?></span></h5>
						<h6 class="card-subtitle">Data: <span class="text-muted"><?= $chamados_dados[1] ?></span></h6>
						<p class="card-text">Observação: <span class="text-muted"><?= $chamados_dados[2] ?></span></p>
					</div>
					
					<? } ?>

					<button class="btn btn-warning   botao-consultar">Voltar</button>
				</div>
			</div>
		</section><!--Fim seção consultar-->


		<!-- JavaScript (Opcional) -->
	    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>