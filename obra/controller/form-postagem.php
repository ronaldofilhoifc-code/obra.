<?php 

require_once("../model/Entity.class.php");
$EntidadePublicacao = new Entity();

$autordaobra = $_POST;



print_r($autordaobra);

$EntidadePublicacao -> insert("publicacao", $autordaobra);

header("Location: ../view/postagem.php");

?>