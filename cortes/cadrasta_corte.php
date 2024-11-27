<?php

include_once("../config.inc.php"); // 1° e 2° Etapa estabelecer uma conexão com banco de dados;

// Parte que irá receber as informações para o form;

$nome_do_corte = $_REQUEST['corte'];
$tempo_execucao = $_REQUEST['tempo_execucao'];
$valor = $_REQUEST['valor'];

// 3° Etapa executar a consulta feita pelo SQL;

$sql = "INSERT INTO cortes (nome, tempo, valor)
        VALUES ('$nome_do_corte', '$tempo_execucao', '$valor')";

$resultadoquery = mysqli_query($conexao, $sql); // Executando o SQL;

if ($resultadoquery) {
    echo "<h3>Corte cadastrado!</h3>";
} else {
    echo "<h3>Erro no cadastro, verifique novamente os campos preenchidos!";
}

// 4° Etapa fechar o acesso ao banco de dados;

mysqli_close($conexao);
