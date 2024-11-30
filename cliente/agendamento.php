<?php

include_once('../config.inc.php'); // 1° e 2° Etapa estabelecer uma conexão com banco de dados;

// Parte que irá receber as informações para o form;

$nome = $_REQUEST['nome'];
$horario = $_REQUEST['horario'];
$observacao = $_REQUEST['observacao'];

// 3° Etapa executar a consulta feita pelo SQL;

$sql = "INSERT INTO agenda (nome, horario, observacao)
        VALUES ('$nome','$horario', '$observacao')";

$query = mysqli_query($conexao, $sql); // Executando o SQL;

if ($query) {
    echo "<h3>Agendamento feito com sucesso!</h3>";
} else {
    echo "Erro no agendamento, data ou horário já ocupados ou entre em contato conosco!";
}

// 4° Etapa fechar o acesso ao banco de dados;

mysqli_close($conexao);