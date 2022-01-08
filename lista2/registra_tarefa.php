
<?php 

    echo '<pre>';
        print_r($_POST);
    echo '</pre>';


    $arquivo = fopen('arquivo.txt', 'a'); //parametro a -> apenas para abertura...

    $titulo = str_replace('#', '/', $_POST['tarefa']); // caso os dados vem com # ele vai substituir por / para que nao haja confusão
    $data = str_replace('#', '/', $_POST['data']);
    $observacao = str_replace('#', '/', $_POST['obs']);


    $texto = $titulo . '#' . $data . '#' . $observacao . PHP_EOL;
    echo $texto;


    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location:  adicionar_tarefa.php');

?>