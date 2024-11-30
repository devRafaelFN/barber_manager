<head>
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>CADASTRO</title>
</head>

<h3>CADASTRE-SE</h3>

<form action="?pg=cadastro" method="post">
    Nome: <input type="text" name="nome"><br>
    Telefone: <input type="number" name="telefone"><br>
    Usuario: <input type="text" name="usuario"><br>
    Senha: <input type="password" name="senha"><br>

    <input type="submit" value="Cadastrar"><br>


    <p>Já tem uma conta? <a href="admin/form_login.php">Login</a></p>
    <a href="index.php">Voltar</a>

    
</form>

<?= include_once('templates/rodape.php'); ?>