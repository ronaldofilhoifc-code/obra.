<?php 
session_start();
require_once("../model/Entity.class.php");
$Entity = new Entity();

$nomeCompleto = $_POST["nomeCompleto"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$tipoDeConta = $_POST["tipoDeConta"];

$dicionario = [

"nomeCompleto" => $nomeCompleto,
"usuario" => $usuario,
"senha" => $senha,
"email" => $email,
"tipoDeConta" => $tipoDeConta,

];



try {
   $Entity -> newUserInsert("usuario", $dicionario); 

} catch(Exception $e) {
    echo $e;
    echo "explodiu tudo";
}


?>