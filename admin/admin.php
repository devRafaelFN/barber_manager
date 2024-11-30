<head>
    <link rel="stylesheet" href="../estilo/admin.css">
</head>
<nav>

    <img src="../imagens/icone.png" alt="Ícone do Menu">
    
    <a href="?pg=inicial"> Página Inicial </a> |
    <a href="?pg=lista_clientes">Clientes </a> |
    <a href="?pg=horarios_agendados">Horários Agendados </a> |
    <a href="?pg=ver_cortes">Cortes </a> |
    <a href="?pg=sair">Sair</a>


  
</nav>

<h1>Painel Admin</h1>

<?php

    include("sessao.php");

    if (logado()) {   // Usuário está logado
        
        echo "<p>Bem-vindo <b>$_SESSION[usuario]</b>!</p>";
    } else {
        header("Location: form_login.php");   // Retorna à página de login
        exit();
    }

?>

<?php

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "inicial_admin.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
