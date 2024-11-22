<?php

include_once("../config.inc.php");

$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO clientes (nome, telefone, senha) VALUES ('$nome','$telefone','$senha')";

$query = mysqli_query($conexao, $sql);

if($query){
    echo "<h2>Cliente Cadastrado com sucesso</h2>";
}
else{
    echo "<h2> Erro ao cadastrar Cliente </h2>";
}

mysqli_close($conexao);