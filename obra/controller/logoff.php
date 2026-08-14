<?php 

session_unset();
setcookie("usuarioLogado", "", time() - 7889238, "/");
unset($_COOKIE["usuarioLogado"]);

header("Location: ../view/login.php");
?>