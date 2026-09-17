<?php

require_once("../model/Entity.class.php");

$EntidadePublicacao = new Entity();

if (!isset($_FILES["imagem"]) || $_FILES["imagem"]["error"] != 0) {
    die("Erro ao enviar a imagem.");
}

$imagem = $_FILES["imagem"];

if ($imagem["size"] > 10 * 1024 * 1024) {
    die("A imagem deve ter no máximo 10 MB.");
}

$tiposPermitidos = [
    "image/jpeg",
    "image/png",
    "image/webp"
];

if (!in_array($imagem["type"], $tiposPermitidos)) {
    die("Tipo de imagem não permitido.");
}

$pasta = "../assets/uploads/";

if (!is_dir($pasta)) {
    mkdir($pasta, 0777, true);
}

$extensao = pathinfo($imagem["name"], PATHINFO_EXTENSION);

$nomeImagem = uniqid("obra_", true) . "." . $extensao;

$caminho = $pasta . $nomeImagem;

if (!move_uploaded_file($imagem["tmp_name"], $caminho)) {
    die("Erro ao salvar a imagem.");
}

$autordaobra = [

    "tituloDaObra" => $_POST["tituloDaObra"],
    "dataDaObra" => $_POST["dataDaObra"],
    "descricaoDaObra" => $_POST["descricaoDaObra"],
    "materiaisDaObra" => $_POST["materiaisDaObra"],
    "autorDaObra" => $_POST["autorDaObra"],
    "caminhoImagem" => $caminho,
    "id_usuario" => $_POST["id_usuario"]

];

$EntidadePublicacao->insert("publicacao", $autordaobra);

header("Location: ../view/postagem.php");
exit();

?>