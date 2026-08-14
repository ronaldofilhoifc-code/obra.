<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Crie sua conta obra.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inserção do Bootstrap versão 4 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Fim insercão Bootstrap Versão 4-->
    <!-- Javascript do site-->
    <!-- css do site-->
    <link rel="stylesheet" href="../assets/css/registrar.css" type="text/css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 registro-boot">

                <div class="cadastro-holder">
                    <form name="form-registrar" class="form-registrar" id="form-registrar" method="post" action="../controller/form-registrar.php">


                        <div class="titulo-holder">
                            <div class="moldura-holder">
                                <img src="../assets/imagem/LOGIN-FRAMEICON.png" class="resize-50">
                            </div>
                            <div class="teto-holder" id="titulo">
                                <p>Crie sua conta obra.</p>
                            </div>
                            <div class="teto-holder" id="linha-fina">
                                <p>Junte-se à comunidade de artistas e amantes de arte.</p>
                            </div>

                        </div>

                        <div class="formulario-holder">

                            <div class="fields-holder">
                                <div class="label-type-holder-universe">

                                </div>
                                <div class="label-type-holder-universe">
                                    <div class="texto-margin">
                                        <b>Nome completo:</b>
                                    </div>
                                </div>
                                <div class="input-holder">
                                    <div class="texto-margin">
                                        <div class="teste"><img class="imagrresize" src="../assets/imagem/chat.png"></div>
                                        <input type="text" class="input-reg" id="reg-nome" required name="reg-nome">

                                    </div>
                                </div>
                                <div class="label-type-holder-universe">

                                </div>
                                <div class="label-type-holder-universe">
                                    <div class="texto-margin">
                                        <b>Nome de usuário:</b>
                                    </div>
                                </div>
                                <div class="input-holder">
                                    <div class="texto-margin">
                                        <div class="teste"><img class="imagrresize" src="../assets/imagem/at.png"></div>
                                        <input type="text" class="input-reg" id="reg-user" required name="reg-user">
                                    </div>
                                </div>
                                <div class="label-type-holder-universe">

                                </div>
                                <div class="label-type-holder-universe">
                                    <div class="texto-margin">
                                        <b>E-mail:</b>
                                    </div>
                                </div>
                                <div class="input-holder">
                                    <div class="texto-margin">
                                        <div class="teste"><img class="imagrresize" src="../assets/imagem/pngegg.png"></div>
                                        <input type="email" class="input-reg" id="reg-email" required name="reg-email">
                                    </div>
                                </div>
                                <div class="label-type-holder-universe">

                                </div>
                                <div class="label-type-holder-universe">
                                    <div class="texto-margin">
                                        <b>Senha: </b>
                                    </div>
                                </div>
                                <div class="input-holder">
                                    <div class="texto-margin">
                                        <div class="teste"><img class="imagrresize" src="../assets/imagem/chaveiro.png"></div>
                                        <input type="password" class="input-reg" id="reg-senha" required name="reg-senha">
                                        <input type="text" class="reg-tipo" id="reg-tipo" name="reg-tipo">
                                    </div>
                                </div>

                                <div class="radio-data-holder">
                                    <div class="texto-margin" id="radio">
                                        <div class="radio-holder">
                                            <input type="checkbox" class="resize-25" required id="radio-data-steal" name="reg-radio-data-steal">
                                            <p>Permito o obra. a coletar e gerenciar meus dados.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="type-holder">
                                <div class="label-type-holder">
                                    <div class="texto-margin">
                                        <b>Tipo de Perfil:</b>
                                    </div>
                                </div>
                                <div class="division-holder">
                                    <div class="split50">

                                        <div class="tipo-holder" id="artista">
                                            <div class="split30">
                                                <div class="bolinha">
                                                    <img src="../assets/imagem/godeIcon.png" class="resize-35">
                                                </div>
                                            </div>
                                            <div class="split70">

                                                <p class="nomeTipo">Artista</p>
                                                <p class="linhaFina">Exiba seu trabalho</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="split50">

                                        <div class="tipo-holder" id="amante">
                                            <div class="split30">
                                                <div class="bolinha">
                                                    <img src="../assets/imagem/coracaoIcon.png" class="resize-50-p">
                                                </div>
                                            </div>
                                            <div class="split70">
                                                <p class="nomeTipo">Amante de arte</p>
                                                <p class="linhaFina">Descubra arte</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="button-holder">
                            <div class="effect-cursor">
                              <button type="submit" class="btn btn-warning botao-registro">Enviar</button>  
                            </div>
                        </div>
                        <div class="continue-holder">
                            <div class="split-30-extra"><hr class="thedivisionbell"></div>
                            <div class="split-30-extra">Ou continue com:</div>
                            <div class="split-30-extra"><hr class="thedivisionbell"></div>
                        </div>

                        <div class="terceiros-holder">
                            <div class="split-30-extra"><div class="botao-terceiro"><img src="../assets/imagem/google-logo.png" class="terceiro-icon"></div></div>
                            <div class="split-30-extra"><div class="botao-terceiro"><img src="../assets/imagem/facebook2.png" class="terceiro-icon"></div></div>
                            <div class="split-30-extra"><div class="botao-terceiro"><img src="../assets/imagem/xvsfelonmusk.png" class="terceiro-icon"></div></div>
                        </div>

                        <div class="continue-holder" id="faca-login">
                            
                            <div class="split-50-extra" id="texto-menor"><p>Já tem uma conta?</p> <p><a href="login.php">Faça login</a></p></div>
                            
                        </div>

                    </form>
                    <!-- fim do cadastro-holder -->
                </div>
                <div class="privacidade-holder">
                    <p>Ao criar sua conta, você concorda com os nossos</p>
                    <p><a href="#">Termos de Serviço</a> • <a href="#">Política de Privacidade</a></p>
                </div>

            </div>
        </div>
    </div>

</body>

<script src="../assets/js/jotaessestemporarios.js"></script>

</html>