<?php

include_once("../config.inc.php"); // 1° e 2° Etapa estabelecer uma conexão com banco de dados;

// Parte que irá receber as informações para o form;

$id = $_REQUEST['id'];
$nome_do_corte = $_REQUEST['corte'];
$valor_do_corte = $_REQUEST['valor'];
$tempo_execucao = $_REQUEST['tempo_execucao'];

// 3° Etapa executar a consulta feita pelo SQL;

$sql = "UPDATE cortes SET nome = '$nome_do_corte', valor = '$valor_do_corte', tempo = '$tempo_execucao' WHERE id = '$id' ";

$query = mysqli_query($conexao, $sql);

if ($query) {

    echo "<h2> Corte Alterado com êxito!</h2>";
}

// 4° Etapa fechar o acesso ao banco de dados;

mysqli_close($conexao);
