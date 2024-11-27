<?php

if(empty($_SERVER['QUERY_STRING'])){
    include_once('templates/topo.php');
    $var = "inicial.php";
    include_once($var);
}
else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
}

include_once('templates/rodape.php');