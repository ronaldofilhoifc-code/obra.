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
                <form name="form-config" class="form-pesquisa">
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
                                            <input type="text" id="pesquisaConfig" class="input-pesquisa"
                                                placeholder="Pesquise uma configuração.">
                                        </div>


                                    </div>





                                </div>
                                <div class="split25">
                                    <div class="botao-holder">
                                        <button class="btn btn-danger" id="botao-enviar-pesquisa">Pesquisar</button>
                                    </div>
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
                            <p>configurações.</p>
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


</body>



</html>