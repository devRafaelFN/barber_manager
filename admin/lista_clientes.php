<head> 
 <title>Lista de Clientes</title>
 <link rel="stylesheet" href="../estilo/lista_clientes.css">
</head>
<body> 
    <h2>Lista de Clientes</h2>
    <p><a href="?pg=form_cliente">Cadastrar Novo Cliente</a></p>
<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM clientes");

    while($clientes = mysqli_fetch_array($sql)){

        echo "<div class='client-details'>";
        echo "Nome: $clientes[nome] <br>";
        echo "Telefone: $clientes[telefone] <br>";
        echo "<a href=?pg=excluir_cliente&id=$clientes[id]><b>[X] Excluir</b></a>";
        echo "<a href=?pg=form_altera_cliente&id=$clientes[id]><b>[v] Alterar</b></a>";
        echo "</div><hr>";
    }

    if(!$sql){
        echo "Não foi possível ver os clientes cadastrados.";
    }

    mysqli_close($conexao); ?>

        
    </body>