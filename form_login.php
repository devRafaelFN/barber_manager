<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN</title>
    <link rel="stylesheet" href="../estilo/form.css">
</head>
<body>
    <section class="login">
        
        
        <img src="../imagens/imagem.barber.jpg" alt="Logo da empresa" class="login-logo">
            
            <h3>Login</h3>
            
            <p>Acesse sua conta para aproveitar nossos benefícios exclusivos!</p>
            
            <form action="login.php" method="post">
                
                Usuário: <input type="text" name="usuario">
                Senha: <input type="password" name="senha">
                <input type="submit" value="Entrar">
            </form>
            
            <p>Não tem uma conta? <a href="../form_cadastro.php" class="cta-btn">Cadastre-se aqui!</a></p>
        </section>
    
        <a href="../index.php">Voltar</a>
</body>
</html>