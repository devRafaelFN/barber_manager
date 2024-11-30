
<head>
    <meta charset="UTF-8">
    <title>Cortes Disponíveis</title>
    <link rel="stylesheet" href="../estilo/ver_cortes.css">
</head>
<body>
    <header>
        <h3>CORTES DISPONÍVEIS</h3>
    </header>
    <div class="main-content">
        <?php
            include_once("../config.inc.php");

            $sql = mysqli_query($conexao, "SELECT * FROM cortes");

            while($cortes = mysqli_fetch_array($sql)) {
                echo "<div class='corte-details'>";
                echo "<div class='corte'>Corte: " . $cortes['corte'] . "</div>";
                echo "<div class='valor'>Valor: " . $cortes['valor'] . "</div>";
                echo "<div class='duracao'>Duração: " . $cortes['duracao'] . "</div>";
                echo "<a href='?pg=excluir_corte&id=" . $cortes['id'] . "'>[X] Excluir</a>";
                echo "<a href='?pg=form_altera_cortes&id=" . $cortes['id'] . "'>[v] Alterar</a>";
                echo "</div><hr>";
            }

            if(!$sql) {
                echo "Não foi possível ver os cortes disponíveis.";
            }

            mysqli_close($conexao);
        ?>
        <a class="btn-cadastro" href="?pg=form_cortes">Adicionar novo corte</a>
    </div>
</body>
</html>
