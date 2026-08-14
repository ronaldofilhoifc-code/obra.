<?php 

if (isset($_COOKIE["usuarioLogado"])) {
    header("Location: ./view/homepage.php");
} else { 
    header("Location: ./view/login.php"); 
}

?>

