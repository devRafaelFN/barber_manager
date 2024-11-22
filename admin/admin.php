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
<nav>
    
    <a href="?pg=inicial"> Página Inicial </a> |
    <a href="?pg=lista_clientes">Clientes </a> |
    <a href="?pg=encerrar_sessao">Sair </a>  |

  
</nav>
<?php

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "inicial.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
