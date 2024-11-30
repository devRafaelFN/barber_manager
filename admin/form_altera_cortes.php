
<head>

    <title>Alterar Corte</title>
    <link rel="stylesheet" href="../estilo/altera_cortes.css">
</head>
<body>
    <header>
        <h3>Alterar Corte</h3>
    </header>
    <div class="main-content">
        <?php
            include_once("../config.inc.php");

            $id = $_REQUEST['id'];

            $sql = "SELECT * FROM cortes WHERE id = $id";

            $query = mysqli_query($conexao, $sql);

            while($cortes = mysqli_fetch_array($query)) {
        ?>
        <form action="?pg=altera_cortes&id=<?= $cortes['id']; ?>" method="post">
            Corte: <input type="text" name="corte" value="<?= $cortes['corte']; ?>"><br>
            Valor: <input type="number" name="valor" value="<?= $cortes['valor']; ?>"><br>
            Duração: <input type="time" name="duracao" value="<?= $cortes['duracao']; ?>"><br>
            <input type="submit" value="Alterar">
        </form>
        <?php
            }

            include_once('templates/rodape.php');
        ?>
    </div>
</body>

