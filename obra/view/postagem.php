<?php
session_start();
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 confirm-boot pop-up" id="pop-up">
                <div class="mensagem-pop">
                    <form class="form-popup">
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
                                    <div class="col-md-5 recibo-holder">
                                        <input type="text" id="jorge-titulo">
                                        <input type="text" id="jorge-data">
                                        <input type="text" id="jorge-descricao">
                                        <input type="text" id="jorge-materiais">
                                        <input type="text" id="jorge-imagem">
                                        <input type="text" id="jorge-autor">
                                    </div>
                                    <div class="col-md-7 recibo-holder">
                                        b
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="close-holder">

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid color pagina-normal">
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
                                                    value="<?php echo $_SESSION["usuarioLogado"] ?>">
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

                                            <img src="../assets/imagem/upload-icon.png" class="up-icon">

                                            <div class="titulo-insira titulo">
                                                <p>Clique aqui para inserir sua imagem!</p>
                                            </div>
                                            <div class="titulo-insira linha-fina">
                                                <p>Tamanho máximo: 10Mb</p>
                                            </div>
                                            <div class="titulo-insira Imagem ">
                                                <p>Não há uma imagem selecionada!</p>
                                            </div>


                                        </div>
                                        <div class="layer-input">
                                            <input type="file" class="momentociencia" id="momentociencia" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="segregacao"><button onclick="popupar()"
                                        class="btn btn-success">Enviar</button>
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



        <script src="../assets/js/inputFile.js"></script>
        <script src="../assets/js/popup-postagem.js"></script>


</body>



</html>