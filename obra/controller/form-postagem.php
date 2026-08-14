<?php 

require_once("../model/Entity.class.php");
$EntidadePublicacao = new Entity();

$autordaobra = $_POST["postagem-autor"];
$datadaobra = $_POST["postagem-data"];
$titulodaobra = $_POST["postagem-titulo"];
$materiaisdaobra = $_POST["postagem-materiais"];
$descricaodaobra = $_POST["postagem-descricao"];

// echo $autordaobra."<br>".$datadaobra."<br>".$titulodaobra."<br>".$materiaisdaobra."<br>".$descricaodaobra;

$dicionarioPublicacao = [

    "dataDaObra" => $datadaobra,
    "tituloDaObra" => $titulodaobra,
    "materiaisDaObra" => $materiaisdaobra,
    "descricaoDaObra" => $descricaodaobra,
    "autorDaObra" => $autordaobra

];

$EntidadePublicacao -> insert("publicacao", $dicionarioPublicacao);

header("Location: ../view/postagem.php");

?>