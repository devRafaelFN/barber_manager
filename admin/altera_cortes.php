<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];
$corte = $_REQUEST['corte'];
$valor = $_REQUEST['valor'];
$duracao = $_REQUEST['duracao'];

$sql = "UPDATE cortes SET corte = '$corte', valor = '$valor', duracao = '$duracao' WHERE id = '$id' ";

$query = mysqli_query($conexao, $sql);

if($query){

    echo "<h2> Corte Alterado com sucesso!</h2>";

}

mysqli_close($conexao);