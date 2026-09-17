<?php
session_start();
require_once("../model/Entity.class.php");
$EntidadePublicacao = new Entity();
?>
<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Suas configurações obra.</title>
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
    <link rel="stylesheet" href="../assets/css/postagem2.css" type="text/css">
</head>

<body>

    <div class="container-fluid tresanoes">
        <div class="row">
            <div class="col-md-12 confirm-boot pop-up" id="pop-up">
                <div class="mensagem-pop">
                    <form id="form-publicacao" class="form-popup" method="post" action="../controller/form-postagem.php" enctype="multipart/form-data">
                        <!-- <div class="close-holder">
                        <div class="fechar-holder" id="fechar">
                            <img src="../assets/imagem/fechar.png" class="fechar-holder">
                        </div>
                        <div class="reciboImg-holder">

                        </div>
                        <div class="fechar-holder">
                            
                        </div>
                    </div> -->
                        <div class="close-holder">
                            <div class="fechar-holder" id="fechar">
                                <img src="../assets/imagem/fechar.png" class="fechar-holder">
                            </div>
                        </div>
                        <div class="reciboImg-holder">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 titulo-popup">
                                        <p>Confirmar publicação:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row lostWeekend">
                                    <input type="hidden" id="jorge-titulo" name="tituloDaObra">
                                    <input type="hidden" id="jorge-data" name="dataDaObra">
                                    <input type="hidden" id="jorge-descricao" name="descricaoDaObra">
                                    <input type="hidden" id="jorge-materiais" name="materiaisDaObra">
                                    <input type="hidden" id="jorge-autor" name="autorDaObra">
                                    <input type="hidden" id="jorge-usuario" name="id_usuario" value=<?php

                                    if (isset($_SESSION["usuarioLogado"])) {

                                        $tristeza = $EntidadePublicacao->userToId($_SESSION["usuarioLogado"]);
                                        echo $tristeza[0];

                                    } else if (isset($_COOKIE["usuarioLogado"])) {
                                        $tristeza = $EntidadePublicacao->userToId($_COOKIE["usuarioLogado"]);
                                        echo $tristeza[0];
                                    }
                                    ?>>
                                    <div class="col-5 recibo-holder" id="etiqueta">






                                    </div>
                                    <div class="col-7 recibo-holder">
                                        <div class="preview-holder">
                                            <img id="preview-imagem" src="" alt="Preview da imagem">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="close-holder">
                            <button type="submit" class="btn btn-success" id="bloqueador">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid color pagina-normal" id="eusintooshadow">
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
                                                <input type="text" name="usuarioMini" id="usuarioMini" value=<?php

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

                <div class="info-holder">
                    <div class="pesquisa-holder">
                        <div class="itens-holder">
                            <div class="split75">
                                <p>Crie sua obra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="agregar-holder">
                        <div class="row tamanhoInputs">
                            <div class="col-md-6 nao">

                                <div class="postagem-campo-holder">
                                    <div class="post-titulo">
                                        <p>Autor da obra:</p>
                                    </div>
                                    <div class="post-campo">
                                        <input required type="text" class="postagem-input" name="postagem-autor"
                                            placeholder="Seu nome aqui..." id="autor">
                                    </div>
                                </div>
                                <div class="postagem-campo-holder">
                                    <div class="post-titulo">
                                        <p>Data da obra:</p>
                                    </div>
                                    <div class="post-campo">
                                        <input required type="date" class="postagem-input" name="postagem-data"
                                            id="data">
                                    </div>
                                </div>
                                <div class="postagem-campo-holder">
                                    <div class="post-titulo">
                                        <p>Título da obra:</p>
                                    </div>
                                    <div class="post-campo">
                                        <input required type="text" class="postagem-input" name="postagem-titulo"
                                            placeholder="Uma postagem interessante!" id="titulo">
                                    </div>
                                </div>
                                <div class="postagem-campo-holder">
                                    <div class="post-titulo">
                                        <p>Descreva os materiais da obra:</p>
                                    </div>
                                    <div class="post-campo">
                                        <input required type="text" class="postagem-input" name="postagem-materiais"
                                            placeholder="Tinta, mesa digitalizadora, sua câmera, etc!" id="materiais">
                                    </div>
                                </div>
                                <div class="postagem-campo-holder">
                                    <div class="post-titulo">
                                        <p>Descreva a obra:</p>
                                    </div>
                                    <div class="post-campo">
                                        <textarea required class="postagem-input textarea" name="postagem-descricao"
                                            placeholder="Escreva tudo sobre sua obra! Detalhe inspirações, processo artístico, ou tudo que essa obra fala para você!"
                                            id="descricao"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 nao">


                                <div class="segregacao inputEpico">

                                    <div class="inputImagem-holder">
                                        <div class="layer-decoracao">

                                            <img src="../assets/imagem/upload-icon.png" class="up-icon" id="upload-icon">

                                            <div class="titulo-insira titulo" id="texto-upload">
                                                <p>Clique aqui para inserir sua imagem!</p>
                                            </div>
                                            <div class="titulo-insira linha-fina" id="texto-tamanho">
                                                <p>Tamanho máximo: 10Mb</p>
                                            </div>
                                            <div class="titulo-insira Imagem " id="texto-imagem">
                                                <p>Não há uma imagem selecionada!</p>
                                            </div>

                                            <img id="preview-upload" src="" alt="Preview da imagem">

                                        </div>
                                        <div class="layer-input">
                                            <input form="form-publicacao" type="file" class="momentociencia" id="momentociencia" name="imagem" accept="image/png, image/jpeg, image/webp" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="segregacao"><button onclick="popupar()" class="btn btn-success">Confirmar
                                        obra.</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once("offcanvasMaldito.php");
        ?>




        <script src="../assets/js/popup-postagem.js"></script>


</body>



</html>