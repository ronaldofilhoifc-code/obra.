<?php
session_start();
require_once __DIR__ . "/../model/Conexao.class.php";
require_once __DIR__ . "/verificaAdmin.php";
$admin = exigirAdmin();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../view/administrarUsuarios.php");
    exit;
}

$acao = $_POST["acao"] ?? "";
$pdo = Conexao::getInstance();


try {
    if ($acao === "cadastrar") {

        echo "entrou no cadastrar";

        $nome = trim($_POST["nomeCompleto"] ?? "");
        $usuario = trim($_POST["usuario"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $senha = $_POST["senha"] ?? "";
        $tipo = trim($_POST["tipoDeConta"] ?? "Usuario");
        $idUsuario = (int)$_POST["id_usuario"];
        if ($idUsuario === (int)$admin["id_usuario"]) {
            $eAdmin = 1;
        } else {
            $eAdmin = isset($_POST["eAdmin"]) ? 1 : 0;
        }

        if ($nome === "" || $usuario === "" || $email === "" || $senha === "") {
            throw new Exception("Preencha todos os campos obrigatórios.");
        }
        $stmt = $pdo->prepare("INSERT INTO usuario (nomeCompleto, usuario, email, senha, tipoDeConta, eAdmin) VALUES (:nome, :usuario, :email, :senha, :tipo, :admin)");
        $stmt->execute([":nome" => $nome, ":usuario" => $usuario, ":email" => $email, ":senha" => $senha, ":tipo" => $tipo, ":admin" => $eAdmin]);
        $_SESSION["adminMensagem"] = "Usuário cadastrado com sucesso.";





    } elseif ($acao === "editar") {
        $id = filter_input(INPUT_POST, "id_usuario", FILTER_VALIDATE_INT);
        $nome = trim($_POST["nomeCompleto"] ?? "");
        $usuario = trim($_POST["usuario"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $tipo = trim($_POST["tipoDeConta"] ?? "Usuario");
        $eAdmin = isset($_POST["eAdmin"]) ? 1 : 0;
        if (!$id || $nome === "" || $usuario === "" || $email === "") {
            throw new Exception("Confira os dados do usuário.");
        }
        if ((int)$id === (int)$admin["id_usuario"] && !$eAdmin) {
            throw new Exception("Você não pode retirar o privilégio de administrador da própria conta.");
        }
        $senha = $_POST["senha"] ?? "";
        if ($senha !== "") {
            $stmt = $pdo->prepare("UPDATE usuario SET nomeCompleto=:nome, usuario=:usuario, email=:email, senha=:senha, tipoDeConta=:tipo, eAdmin=:admin WHERE id_usuario=:id");
            $stmt->execute([":nome" => $nome, ":usuario" => $usuario, ":email" => $email, ":senha" => $senha, ":tipo" => $tipo, ":admin" => $eAdmin, ":id" => $id]);
        } else {
            $stmt = $pdo->prepare("UPDATE usuario SET nomeCompleto=:nome, usuario=:usuario, email=:email, tipoDeConta=:tipo, eAdmin=:admin WHERE id_usuario=:id");
            $stmt->execute([":nome" => $nome, ":usuario" => $usuario, ":email" => $email, ":tipo" => $tipo, ":admin" => $eAdmin, ":id" => $id]);
        }
        $_SESSION["adminMensagem"] = "Usuário atualizado com sucesso.";
    } elseif ($acao === "excluir") {
        $id = filter_input(INPUT_POST, "id_usuario", FILTER_VALIDATE_INT);
        if (!$id) throw new Exception("Usuário inválido.");
        if ((int)$id === (int)$admin["id_usuario"]) throw new Exception("Você não pode excluir a própria conta.");
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE id_usuario = :id");
        $stmt->execute([":id" => $id]);
        $_SESSION["adminMensagem"] = "Usuário excluído com sucesso.";
    } else {
        throw new Exception("Ação inválida.");
    }
} catch (PDOException $e) {
    $_SESSION["adminErro"] = "Não foi possível salvar. Verifique se usuário e e-mail já estão cadastrados ou se há publicações vinculadas à conta.";
} catch (Exception $e) {
    $_SESSION["adminErro"] = $e->getMessage();
}
header("Location: ../view/administrarUsuarios.php");
exit;
