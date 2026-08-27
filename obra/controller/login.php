<?php 

session_start();
require_once("../model/Entity.class.php");
$Entity = new Entity();

$senha = $_POST["senha"];
$tipo = $_POST["tipo"];
$cookieLog = $_POST["marcos"];

// marcos ativado = cookie 3 meses
// marcos desativado = sessão maldita

function login ($metodoLog,$cred,$senha2,$logCookie) {

    global $Entity;

    if(empty($Entity->login("usuario", $metodoLog, $cred, $senha2))) {

    $_SESSION["erro"] = "E-mail/usuário ou senha incorretos.";

    header("Location: ../view/login.php");
    exit();

} else {

        $logado = $Entity->login("usuario",$metodoLog,$cred,$senha2);

        if ($logCookie) { // O LOGIN COM COOKIES FUNCIONA
            setcookie("usuarioLogado", $logado[0][0]["usuario"], time() + 7889238, "/"); // a barra é necessária para manter em todo o domínio
            echo "cookie";
            echo "<br>".$_COOKIE["usuarioLogado"];
        } else {
            $_SESSION["usuarioLogado"] = $logado[0][0]["usuario"];
        }

        header("Location: ../view/homepage.php");

    }

}

if ($tipo == 0) {
    $metodo = $_POST["email"];
    login("email", $metodo, $senha, $cookieLog);
} else {
    $metodo = $_POST["usuario"];
    login("usuario", $metodo, $senha, $cookieLog);
}

?>