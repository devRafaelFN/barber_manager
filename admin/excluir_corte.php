<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM cortes WHERE id = $id";

$query = mysqli_query($conexao, $sql);

if($query){
    echo "Corte Deletado com Sucesso!";
}

mysqli_close($conexao);