<?php

session_start();

// echo $_SESSION["erro"];
// echo $_SESSION["usuarioLogado"];

if (isset($_SESSION["erro"])) {
    echo $_SESSION["erro"];
} else {
    if (isset($_SESSION["usuarioLogado"])) {
        echo $_SESSION["usuarioLogado"];
    }
}


?>
