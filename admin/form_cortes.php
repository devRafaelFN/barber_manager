
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Novo Corte</title>
    <link rel="stylesheet" href="../estilo/cadastra_cortes.css">
</head>
<body>
    <header>
        <h3>CADASTRO DE NOVO CORTE</h3>
    </header>
    <div class="main-content">
        <form action="adicionar_cortes.php" method="post">
            Nome do Corte: <input type="text" name="corte"><br>
            Valor: <input type="number" name="valor"><br>
            Duração: <input type="time" name="duracao"><br>
            <input type="submit" value="Cadastrar"><br>
            <a href="admin.php">Voltar</a>
        </form>
    </div>
</body>