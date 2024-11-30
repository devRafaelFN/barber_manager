<?php 

include_once("../config.inc.php");

$corte = $_REQUEST['corte'];
$valor = $_REQUEST['valor'];
$duracao = $_REQUEST['duracao'];

$sql = "INSERT INTO cortes (corte, valor, duracao) VALUES ('$corte','$valor','$duracao')";

$query = mysqli_query ($conexao, $sql);

if($query){
    echo "<h3>Cadastro Concluído com sucesso.</h3>";
}
else{
    echo "<h3> Não foi possível Concluir o cadastro.</h3>";
}

mysqli_close($conexao);