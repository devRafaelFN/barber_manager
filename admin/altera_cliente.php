<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];

$sql = "UPDATE clientes SET nome = '$nome', telefone = '$telefone' WHERE id = '$id' ";

$query = mysqli_query($conexao, $sql);

if($query){

    echo "<h2> Cliente Alterado com sucesso!</h2>";

}

mysqli_close($conexao);

