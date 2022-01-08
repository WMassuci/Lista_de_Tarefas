<?php

//pegar nome do usuario

session_start();

$usuario_autentificado = false;

$usuarios = array(

    array("email" => "wander@gmail.com", "senha" => "1234"),
    array("email" => "gabriel@gmail.com", "senha" => "1234"),

);


foreach($usuarios as $user){

    if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){

        $usuario_autentificado = true;

    };
};


if($usuario_autentificado == true){

    echo "usuario logado";
    $_SESSION['autentificado'] = 'SIM';
    header('Location:  home.php');
} else{

    $_SESSION['autentificado'] = 'NAO';
    header('Location:  index.php?login=erro');
}

?>