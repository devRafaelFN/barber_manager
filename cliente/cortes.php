<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM cortes");

    while($cortes = mysqli_fetch_array($sql)){
        echo "Corte: $corte[corte] <br>";
        echo "Valor: $valor[valor] <br>";
        echo "Duração: $duracao[duracao] <br>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível ver os cortes disponiveis.";
    }

    mysqli_close($conexao);