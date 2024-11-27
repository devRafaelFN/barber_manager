<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
    <style>
        
        .login {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 300px;
            margin: 50px auto; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        
        .login-logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 20px; 
        }

       
        .login input[type="text"],
        .login input[type="password"],
        .login input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login input[type="submit"] {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login input[type="submit"]:hover {
            background-color: #0056b3;
        }

       
        .cta-btn {
            color: #007BFF;
            text-decoration: none;
        }

        .cta-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section class="login">
        
        
    <img src="imagem.barber.jpg" alt="Logo da empresa" class="login-logo">
        
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
