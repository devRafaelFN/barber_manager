<?php

include_once("../config.inc.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

$query = mysqli_query($conexao, $sql);

mysqli_close($conexao);