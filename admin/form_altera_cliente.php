<?php

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM clientes WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    while($cliente = mysqli_fetch_array($query)){

?>
<h3>Alterar Cliente </h3>

<form action="?pg=altera_cliente&id=<?= $cliente['id'];?>" method="post">
  
  Nome: <input type="text" name="nome" value="<?= $cliente['nome'];?>"> <br>
  Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'];?>"> <br>

 <input type="submit" value="Alterar">
</form>

<?php
    }
?>
