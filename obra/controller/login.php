<?php
session_start();
require_once("../model/Entity.class.php");
$Entity = new Entity();

$checkSessaoCookie = $_POST["cookieSessao"];
$switchSessaoCookie = 99;
$tipo = $_POST["tipo"];
$senha = $_POST["senha"];

if (isset($checkSessaoCookie)) {
    $switchSessaoCookie = 1;
} else {
    $switchSessaoCookie = 0;
}

function login($switchEmailUsuario, $credencial, $senha)
{
    global $Entity;
    global $switchSessaoCookie;


    //tabela, tipodelogin, credencial, senha

    if (empty($Entity->login("usuario", $switchEmailUsuario, $credencial, $senha))) {

        $_SESSION["erro"] = "E-mail/usuário ou senha incorretos.";
        header("Location: ../view/login.php");
        exit();

    } else {

        $logado = $Entity->login("usuario", $switchEmailUsuario, $credencial, $senha);

        if ($switchSessaoCookie == 1) { // O LOGIN COM COOKIES FUNCIONA
            setcookie("usuarioLogado", $logado[0][0]["usuario"], time() + 7889238, "/"); // a barra é necessária para manter em todo o domínio
            echo "cookie";
            echo "<br>" . $_COOKIE["usuarioLogado"];
            header("Location: ../view/homepage.php");
        } else {
            $_SESSION["usuarioLogado"] = $logado[0][0]["usuario"];
            header("Location: ../view/homepage.php");
        }

    }

}

if ($tipo == 0) {
    $credencial = $_POST["email"];
    login("email", $credencial, $senha);
} else {
    $credencial = $_POST["usuario"];
    login("usuario", $credencial, $senha);
}


?>