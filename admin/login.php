<?php

include_once("../config.inc.php");

$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

$sql = "SELECT * FROM clientes WHERE usuario = '$usuario' AND senha = 'senha' ";

$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){

    $dados = mysqli_fetch_array($resultado);

    if($senha == $dados['senha']){   //login valido
        session_start();
        $_SESSION['user_id'] = $dados ['id'];
        $_SESSION['usuario'] = $dados ['usuario'];

        header("location: index.php");
        
    } else{
        header("location: form_login.php");
    }

} else{   //login inválido
    echo "NOME DE USUARIO OU SENHA INCORRETOS!";
}

mysqli_close($conexao);