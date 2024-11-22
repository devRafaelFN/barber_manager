<?php

include_once("../config.inc.php");

$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];
$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO clientes (nome, telefone, usuario, senha) VALUES ('$nome','$telefone','$usuario','$senha')";

$query = mysqli_query($conexao, $sql);

if($query){
    echo "<h2>Cliente Cadastrado com sucesso</h2>";
}
else{
    echo "<h2> Erro ao cadastrar Cliente </h2>";
}

mysqli_close($conexao);