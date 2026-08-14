<?php 

require_once("../model/Entity.class.php");
require_once("../controller/login.php");
$Entity = new Entity();

$nomeCompleto = $_POST["reg-nome"];
$nomeUser = $_POST["reg-user"];
$email = $_POST["reg-email"];
$senha = $_POST["reg-senha"];
$tipo = $_POST["reg-tipo"];

// echo $nomeCompleto." ".$nomeUser." ".$email." ".$senha." ".$tipo;

$Regdicionario = [

"nomeCompleto" => $nomeCompleto,
"usuario" => $nomeUser,
"email" => $email,
"senha" => $senha,
"tipoDeConta" => $tipo

];

$Entity -> insert("usuario", $Regdicionario);
login("usuario", $nomeUser, $senha, false);




?>