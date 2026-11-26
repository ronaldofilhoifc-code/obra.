<?php
// Protege a área administrativa consultando a permissão diretamente no banco.
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once __DIR__ . "/../model/Conexao.class.php";

function usuarioAdminAtual()
{
    $usuarioLogado = $_SESSION["usuarioLogado"] ?? $_COOKIE["usuarioLogado"] ?? null;
    if (!$usuarioLogado) {
        return false;
    }

    $pdo = Conexao::getInstance();
    $stmt = $pdo->prepare("SELECT id_usuario, usuario, eAdmin FROM usuario WHERE usuario = :usuario LIMIT 1");
    $stmt->execute([":usuario" => $usuarioLogado]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario || !in_array(strtolower(trim((string)$usuario["eAdmin"])), ["1", "true", "yes"], true)) {
        return false;
    }
    return $usuario;
}

function exigirAdmin()
{
    $admin = usuarioAdminAtual();
    if (!$admin) {
        header("Location: ../view/homepage.php");
        exit;
    }
    return $admin;
}
?>