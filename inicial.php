<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia XYZ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .conteudo-principal {
            text-align: center;
            padding: 40px;
            margin: 0 auto;
            max-width: 1200px;
        }

        h2 {
            font-size: 36px;
            color: #2C3E50;
            margin-bottom: 20px;
            font-weight: bold;
        }

        h3 {
            font-size: 28px;
            color: #34495E;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .imagem-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0; 
            padding: 15px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        section {
            margin-top: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            padding: 10px 0;
            font-size: 18px;
            border-bottom: 1px solid #eee;
        }

        ul li:last-child {
            border-bottom: none;
        }

        .contatos p {
            font-size: 20px;
            margin-top: 10px;
            font-weight: bold;
        }

        .contatos strong {
            font-weight: bold;
            color: #E74C3C;
        }

        .cta-btn {
            background-color: #E74C3C;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 20px;
            display: inline-block;
        }

        .cta-btn:hover {
            background-color: #C0392B;
        }

        .login form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login label {
            font-size: 18px;
            margin-top: 10px;
            text-align: left;
            width: 80%;
        }

        .login input {
            width: 80%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login button {
            margin-top: 20px;
        }

        footer {
            background-color: #2C3E50;
            color: #fff;
            padding: 10px 0; 
            text-align: center;
            font-size: 14px; 
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 5px 0; 
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 8px; 
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="conteudo-principal">
        <h2>Bem-vindo à Nossa Barbearia!</h2>
        <p>Oferecemos os melhores serviços de corte de cabelo e barba com qualidade e profissionalismo.</p>

        <div class="imagem-container">
            <img src="imagem.barber.png" alt="Imagem da Barbearia" width="420" height="100">
        </div>

        <!-- Login -->
        <section class="login">
            <h3>Login</h3>
            <p>Acesse sua conta para aproveitar nossos benefícios exclusivos!</p>
            <form action="/login" method="POST">
                <label for="login-email">E-mail:</label>
                <input type="email" id="login-email" name="email" required placeholder="Seu e-mail">

                <label for="login-senha">Senha:</label>
                <input type="password" id="login-senha" name="senha" required placeholder="Sua senha">

                <button type="submit" class="cta-btn">Entrar</button>
            </form>
            <p>Não tem uma conta? <a href="/cadastro" class="cta-btn">Cadastre-se aqui!</a></p>
        </section>

        <!-- Serviços -->
        <section class="servicos">
            <h3>Serviços</h3>
            <ul>
                <li>Corte de cabelo masculino</li>
                <li>Corte de barba</li>
                <li>Design de sobrancelhas</li>
            </ul>
        </section>

        <!-- Localização -->
        <section class="localizacao">
            <h3>Nosso Endereço</h3>
            <p>Estamos localizados no centro da cidade</p>
        </section>

        <!-- Contatos -->
        <section class="contatos">
            <h3>Contato</h3>
            <p>Telefone para contato:</p>
            <p><strong>Telefone:</strong> (81) 98168-6973</p>
            <a href="tel:+5581981686973" class="cta-btn">Ligue Agora</a>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Barbearia XYZ | Todos os direitos reservados</p>
        <p>
            <a href="mailto:contato@barbearia.com">Email</a> |
            <a href="tel:+5581981686973">Telefone</a> |
            <a href="#">Política de Privacidade</a>
        </p>
    </footer>

    <script>
        document.querySelector('.login form').addEventListener('submit', (e) => {
            e.preventDefault();

            const email = document.getElementById('login-email').value;
            const senha = document.getElementById('login-senha').value;

            // Simulação de autenticação (substitua por lógica de backend)
            if (email === 'cliente@exemplo.com' && senha === '123456') {
                alert('Login realizado com sucesso!');
                // Redirecionar para a página inicial ou área de membros
                window.location.href = '/dashboard';
            } else {
                alert('E-mail ou senha inválidos. Tente novamente.');
            }
        });
    </script>
</body>
</html>
