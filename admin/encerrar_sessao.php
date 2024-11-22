<?php

function encerrar(){
    session_destroy();
    $_SESSION = [];

    header("location: incial.php");
}