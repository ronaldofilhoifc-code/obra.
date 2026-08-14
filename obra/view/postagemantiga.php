<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Crie sua obra.</title>
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
    <link rel="stylesheet" href="../assets/css/postagem.css" type="text/css">
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
                                                <input type="hidden" name="usuarioMini" id="usuarioMini"
                                                    value="<?php 

                                                    if (isset($_SESSION["usuarioLogado"])) {
                                                        echo $_SESSION["usuarioLogado"];
                                                    }  else if (isset($_COOKIE["usuarioLogado"])) {
                                                        echo $_COOKIE["usuarioLogado"];
                                                    } 

                                                    ?>">
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

            <div class="col-md-11 postagem-main-boot">
                <form name="form-postagem" class="form-pesquisa" method="post" action="../controller/form-postagem.php">
                    <div class="info-holder postagem-info-holder">
                        <div class="postagem-criar-titulo">
                            <div class="postagem-titulo-holder">
                                <p>Crie sua nova obra:</p>
                            </div>
                        </div>
                        <div class="row info-row">
                            <div class="col-md-6 postagem-form-boot">
                                <div class="postagem-holder-emcomum">

                                    <!-- oficina vazia, mente do diabo - Gabriel Bosse, 28/05/2026 -->


                                    <div class="postagem-campo-holder">
                                        <div class="post-titulo">
                                            <p>Autor da obra:</p>
                                        </div>
                                        <div class="post-campo">
                                            <input required type="text" class="postagem-input" name="postagem-autor" placeholder="Seu nome aqui...">
                                        </div>
                                    </div>
                                    <div class="postagem-campo-holder">
                                        <div class="post-titulo">
                                            <p>Data da obra:</p>
                                        </div>
                                        <div class="post-campo">
                                            <input required type="date" class="postagem-input" name="postagem-data">
                                        </div>
                                    </div>
                                    <div class="postagem-campo-holder">
                                        <div class="post-titulo">
                                            <p>Título da obra:</p>
                                        </div>
                                        <div class="post-campo">
                                            <input required type="text" class="postagem-input" name="postagem-titulo" placeholder="Uma postagem interessante!">
                                        </div>
                                    </div>
                                    <div class="postagem-campo-holder">
                                        <div class="post-titulo">
                                            <p>Descreva os materiais da obra:</p>
                                        </div>
                                        <div class="post-campo">
                                            <input required type="text" class="postagem-input" name="postagem-materiais" placeholder="Tinta, mesa digitalizadora, sua câmera, etc!">
                                        </div>
                                    </div>
                                    <div class="postagem-campo-holder">
                                        <div class="post-titulo">
                                            <p>Descreva a obra:</p>
                                        </div>
                                        <div class="post-campo">
                                            <textarea required class="postagem-input textarea" name="postagem-descricao" placeholder="Escreva tudo sobre sua obra! Detalhe inspirações, processo artístico, ou tudo que essa obra fala para você!"></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="col-md-6 upload-form-boot">
                                <div class="postagem-holder-emcomum" id="organizar">
                                    <div class="postagem-splitA">
                                        <!-- <input type="file" name="postagem-imagem"> -->
                                    </div>
                                    <div class="postagem-splitB">
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!--fim do main boot -->
        </div>
    </div>




</body>

<script src="../assets/js/jotaessestemporarios.js"></script>

</html>