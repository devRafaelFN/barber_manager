<head>
    <link rel="stylesheet" href="../estilo/horarios_agendados.css">
    <title>Horários Agendados</title>
</head>

<body>
    <header>
        <h3>Horários Agendados</h3>
    </header>
    <div class="main-content">
        <?php
            include_once("../config.inc.php");

            $sql = mysqli_query($conexao, "SELECT * FROM agenda");

            while($agenda = mysqli_fetch_array($sql)) {
                echo "<div class='agenda-details'>";
                echo "Nome: " . $agenda['nome'] . "<br>";
                echo "Horário: " . $agenda['horario'] . "<br>";
                echo "Observação: " . $agenda['observacao'] . "<br>";
                echo "</div><hr>";
            }

            if(!$sql) {
                echo "Não foi possível ver os horários agendados.";
            }

            mysqli_close($conexao);
        ?>
    </div>
</body>

