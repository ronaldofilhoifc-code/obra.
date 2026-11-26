<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>obra.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inserção do Bootstrap versão 4 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Fim insercão Bootstrap Versão 4-->
    <!-- Javascript do site-->
    <!-- css do site-->
    <link rel="stylesheet" href="../assets/css/homepage.css" type="text/css">
</head>

<body>

    <div class="container-fluid color">
        <div class="row knocktotheleft">
            <div class="col-md-1 sidebar-boot">
                <div class="sidebar-holder">
                    <div class="apps-holder">
                        <div class="edit-holder">
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img
                                    src="../assets/imagem/sandwich.png" class="sandwich" draggable="false">
                            </button>

                            <div class="botaoedit" id="botaoeditmain"><img src="../assets/imagem/caneta.png"
                                    draggable="false" class="resize">
                            </div>



                        </div>
                        <div class="local-holder">

                            <div class="new-page-holder">
                                <div class="split23">
                                    <div class="button-circle-holder homeA" id="home">
                                        <img src="../assets/imagem/home.png" class="resize-menu" draggable="false">
                                    </div>
                                </div>
                                <div class="split33">
                                    Início
                                </div>
                            </div>
                            <div class="new-page-holder">
                                <div class="split23">
                                    <div class="button-circle-holder perfilA" id="config">
                                        <img src="../assets/imagem/perfil.png" class="resize-menu" draggable="false">
                                    </div>
                                </div>
                                <div class="split33">
                                    Perfil
                                </div>
                            </div>
                            <div class="new-page-holder comely">
                                <div class="split23">
                                    <div class="new-page-holder">
                                        <div class="split23">
                                            <div class="button-circle-holder bola-perfil" id="bolaPerfil2">
                                                <input type="text" name="usuarioMini" id="usuarioMini"
                                                    value=<?php

                                                            if (isset($_SESSION["usuarioLogado"])) {
                                                                echo $_SESSION["usuarioLogado"];
                                                            } else if (isset($_COOKIE["usuarioLogado"])) {
                                                                echo $_COOKIE["usuarioLogado"];
                                                            }


                                                            ?>>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="new-page-holder esconde-esconde" id="sairPratico">

                                <form name="unico" action="../controller/logoff.php">
                                    <button type="submit" class="btn btn-info">Sair?</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-11 main-boot">
                <form name="form-pesquisa" class="form-pesquisa">
                    <div class="info-holder">
                        <div class="pesquisa-holder">
                            <div class="itens-holder">
                                <div class="split75">

                                    <div class="super-input-holder">

                                        <div class="lupa-icon" id="a">
                                            <img src="../assets/imagem/lupa.png" class="icone-sininho responsive"
                                                draggable="false">
                                        </div>
                                        <div class="input-holder">
                                            <input type="text" id="pesquisaHome" class="input-pesquisa"
                                                placeholder="Qual obra iremos ver hoje?">
                                        </div>


                                    </div>





                                </div>
                                <div class="split25">
                                    <div class="botao-holder">
                                        <button class="btn btn-danger" type="button" id="botao-enviar-pesquisa">Pesquisar</button>
                                    </div>
                                    <?php
                                    require_once __DIR__ . "/../controller/verificaAdmin.php";
                                    $adminAtual = false;
                                    try {
                                        $adminAtual = usuarioAdminAtual();
                                    } catch (Throwable $e) {
                                        $adminAtual = false;
                                    }
                                    if ($adminAtual) {
                                    ?>
                                        <div class="controle-admin">
                                            <a href="administrarUsuarios.php"
                                                class="btn btn-sm btn-danger"
                                                title="Administrar usuários">
                                                <strong>CONTROLE</strong>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div class="sinos-holder-70">
                                        <div class="icone-sininho">
                                            <a href="homeConfig.php">
                                                <img src="../assets/imagem/config.png"
                                                    class="icone-sininho icone-sininho2" draggable="false">
                                            </a>
                                        </div>
                                        <div class="icone-sininho sino2">
                                            <a href="#">
                                                <img src="../assets/imagem/sino.png"
                                                    class="icone-sininho icone-sininho2" draggable="false">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nome-obra-holder" id="titulo">
                            <p>obras.</p>
                        </div>
                        <div class="obras-holder" id="principal">





                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once("offcanvasMaldito.php");
    ?>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Navegação da barra lateral (estes handlers estavam ausentes da homepage).
            var editar = document.getElementById("botaoeditmain");
            if (editar) editar.addEventListener("click", function() {
                window.location.href = "postagem.php";
            });

            var inicio = document.querySelector(".homeA");
            if (inicio) inicio.addEventListener("click", function() {
                window.location.href = "homepage.php";
            });

            var perfil = document.querySelector(".perfilA");
            if (perfil) perfil.addEventListener("click", function() {
                window.location.href = "homePerfil.php";
            });

            // Abre/fecha o botão de sair ao clicar no avatar.
            var avatar = document.getElementById("bolaPerfil2");
            var sair = document.getElementById("sairPratico");
            if (avatar && sair) {
                avatar.addEventListener("click", function() {
                    sair.style.display = (sair.style.display === "flex") ? "none" : "flex";
                });
            }

            // Alterna notificações sem provocar navegação para o topo.
            var sino = document.querySelector(".sino2 a");
            if (sino) {
                var notificacoesAtivas = true;
                sino.addEventListener("click", function(event) {
                    event.preventDefault();
                    notificacoesAtivas = !notificacoesAtivas;
                    alert(notificacoesAtivas ? "Notificações ativadas!" : "Notificações desativadas!");
                });
            }

            // A pesquisa ainda não possui consulta de obras implementada; evita que o botão recarregue a página.
            var pesquisar = document.getElementById("botao-enviar-pesquisa");
            if (pesquisar) pesquisar.addEventListener("click", function() {
                var campo = document.getElementById("pesquisaHome");
                if (campo && campo.value.trim() !== "") {
                    alert("A pesquisa de obras ainda não está conectada ao banco de dados.");
                } else if (campo) {
                    campo.focus();
                }
            });
        });
    </script>

</body>



</html>