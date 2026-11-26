<?php
session_start();
require_once __DIR__ . "/../controller/verificaAdmin.php";
$admin = exigirAdmin();
$pdo = Conexao::getInstance();
$usuarios = $pdo->query("SELECT id_usuario, nomeCompleto, usuario, email, tipoDeConta, eAdmin FROM usuario ORDER BY id_usuario ASC")->fetchAll(PDO::FETCH_ASSOC);
$msg = $_SESSION["adminMensagem"] ?? "";
unset($_SESSION["adminMensagem"]);
$erro = $_SESSION["adminErro"] ?? "";
unset($_SESSION["adminErro"]);
function h($v)
{
    return htmlspecialchars((string)$v, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrar usuários - obra.</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <style>
        .admin-usuarios {
            padding: 30px;
            background-color: #f0e8e6;
            border-radius: 25px;
            

        }

        .admin-usuarios .table-wrap {
            overflow-x: auto;
            background: #fff;
            border-radius: 12px;
            padding: 16px;
        }

        .admin-usuarios h1 {
            margin-bottom: 22px;
        }

        .admin-usuarios .form-control {
            min-width: 120px;
        }

        .admin-usuarios .acoes {
            white-space: nowrap;
        }

        body {
            background-color: #ecdcc4;
            padding-top: 4.8%;
        }
        
        
    </style>
</head>

<body>
    <div class="container admin-usuarios">

        <div class="row aqui">
            <div class="col-md-12 larp">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                    <h1>Controle de usuários</h1>
                    <a href="homepage.php" class="btn btn-outline-secondary">Voltar ao início</a>
                </div>
                <?php if ($msg): ?><div class="alert alert-success"><?= h($msg) ?></div><?php endif; ?>
                <?php if ($erro): ?><div class="alert alert-danger"><?= h($erro) ?></div><?php endif; ?>

                <div class="card mb-4">
                    <div class="card-header">Cadastrar novo usuário</div>
                    <div class="card-body">
                        <form method="post" action="../controller/adminUsuarios.php" class="row g-3">
                            <input type="hidden" name="acao" value="cadastrar">
                            <div class="col-md-4"><label class="form-label">Nome completo</label><input class="form-control" name="nomeCompleto" maxlength="50" required></div>
                            <div class="col-md-3"><label class="form-label">Usuário</label><input class="form-control" name="usuario" maxlength="50" required></div>
                            <div class="col-md-3"><label class="form-label">E-mail</label><input class="form-control" type="email" name="email" maxlength="50" required></div>
                            <div class="col-md-2"><label class="form-label">Senha</label><input class="form-control" type="password" name="senha" maxlength="50" required></div>
                            <div class="form-group">
                                <label for="tipoDeConta">Tipo de conta</label>

                                <select class="form-control"
                                    name="tipoDeConta"
                                    id="tipoDeConta"
                                    required>

                                    <option value="Amante">Amante</option>
                                    <option value="Artista">Artista</option>

                                </select>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-check mb-2"><input class="form-check-input" type="checkbox" name="eAdmin" value="1" id="novoAdmin"><label class="form-check-label" for="novoAdmin">Administrador</label></div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end"><button class="btn btn-danger" type="submit">Cadastrar usuário</button></div>
                        </form>
                    </div>
                </div>

                <h2 class="h4">Usuários cadastrados (<?= count($usuarios) ?>)</h2>
                <div class="table-wrap">
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome completo</th>
                                <th>Usuário</th>
                                <th>E-mail</th>
                                <th>Tipo</th>
                                <th>Admin</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $u): $formId = "editar" . (int)$u["id_usuario"]; ?>
                                <tr>
                                    <td><?= h($u["id_usuario"]) ?><input form="<?= h($formId) ?>" type="hidden" name="id_usuario" value="<?= h($u["id_usuario"]) ?>"></td>
                                    <td><input form="<?= h($formId) ?>" class="form-control form-control-sm" name="nomeCompleto" value="<?= h($u["nomeCompleto"]) ?>" maxlength="50" required></td>
                                    <td><input form="<?= h($formId) ?>" class="form-control form-control-sm" name="usuario" value="<?= h($u["usuario"]) ?>" maxlength="50" required></td>
                                    <td><input form="<?= h($formId) ?>" class="form-control form-control-sm" type="email" name="email" value="<?= h($u["email"]) ?>" maxlength="50" required></td>
                                    <td>
                                        <select form="<?= h($formId) ?>"
                                            class="form-control form-control-sm"
                                            name="tipoDeConta"
                                            required>

                                            <option value="Amante"
                                                <?= ($u["tipoDeConta"] === "Amante de arte" ? "selected" : "") ?>>
                                                Amante de arte
                                            </option>

                                            <option value="Artista"
                                                <?= ($u["tipoDeConta"] === "Artista" ? "selected" : "") ?>>
                                                Artista
                                            </option>

                                        </select>
                                    </td>
                                    <td>
                                        <?php if ((int)$u["id_usuario"] === (int)$admin["id_usuario"]): ?>

                                            <input form="<?= h($formId) ?>"
                                                type="hidden"
                                                name="eAdmin"
                                                value="1">

                                            <input type="checkbox"
                                                checked
                                                disabled
                                                aria-label="Administrador">

                                            <small class="text-muted">Protegido</small>

                                        <?php else: ?>

                                            <input form="<?= h($formId) ?>"
                                                type="checkbox"
                                                name="eAdmin"
                                                value="1"
                                                <?= ((int)$u["eAdmin"] === 1 ? "checked" : "") ?>
                                                aria-label="Administrador">

                                        <?php endif; ?>
                                    </td>
                                    <td class="acoes">
                                        <form id="<?= h($formId) ?>" method="post" action="../controller/adminUsuarios.php" class="mb-1">
                                            <input type="hidden" name="acao" value="editar">
                                            <input class="form-control form-control-sm mb-1" type="password" name="senha" placeholder="Nova senha (opcional)" maxlength="50">
                                            <button class="btn btn-sm btn-success" type="submit">Salvar</button>
                                        </form>
                                        <form method="post" action="../controller/adminUsuarios.php" class="d-inline" onsubmit="return confirm('Deseja realmente excluir este usuário?');">
                                            <input type="hidden" name="acao" value="excluir"><input type="hidden" name="id_usuario" value="<?= h($u["id_usuario"]) ?>">
                                            <button class="btn btn-sm btn-danger" type="submit" <?= ((int)$u["id_usuario"] === (int)$admin["id_usuario"] ? "disabled" : "") ?>>Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (!$usuarios): ?><tr>
                                    <td colspan="7" class="text-center">Nenhum usuário cadastrado.</td>
                                </tr><?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-3">A senha deixada em branco durante a edição permanece igual.</p>
            </div>
        </div>
    </div>
</body>

</html>