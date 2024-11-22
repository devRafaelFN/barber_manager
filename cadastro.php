<?php

include_once('config.inc.php');

$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];
$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO clientes (nome, telefone, usuario, senha) VALUES ('$nome','$telefone','$usuario','$senha')";

$query = mysqli_query($conexao, $sql); //executando comando Solicitado na variavel "$sql" 

if($query){
    echo "<h3>Cadastro Concluído com sucesso.</h3>";
}
else{
    echo "<h3> Não foi possível Concluir o cadastro.</h3>";
}

mysqli_close($conexao);