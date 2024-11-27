<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo/cadastro.css">
</head>
<body>

    <form action="?pg=cadastro" method="post">
        <h3>CADASTRE-SE</h3>
        
        <div class="message">
            <p>Preencha os campos abaixo para criar sua conta!</p>
        </div>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" id="telefone" required>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <input type="submit" value="Cadastrar">

        <p>Já tem uma conta? <a href="admin/form_login.php">Login</a></p>
        <p><a href="index.php">Voltar</a></p>
    </form>

</body>
</html>
