

<head>
    <meta charset="UTF-8">
    <title>Cortes Disponíveis</title>
    <link rel="stylesheet" href="../estilo/cortes.css">
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
                echo "</div><hr>";
            }

            if(!$sql) {
                echo "Não foi possível ver os cortes disponíveis.";
            }

            mysqli_close($conexao);
        ?>
    </div>
</body>
