<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Recupere a senha obra.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inserção do Bootstrap versão 4 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Fim insercão Bootstrap Versão 4-->
    <!-- Javascript do site-->
    <!-- css do site-->
    <link rel="stylesheet" href="../assets/css/recuperaSenha.css" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 recupera-boot">
                <div class="recupera-holder">
                    <div class="texto-crie">
                        <div class="new-moldura-holder">
                            <img src="../assets/imagem/LOGIN-FRAMEICON.png" class="imagemicone">
                        </div>
                        <div class="new-teto-holder" id="titulo">
                            <p>Recuperação de Conta</p>
                        </div>
                        <div class="new-teto-holder" id="linha-fina">
                            <p>Insira seu e-mail para recuperar sua senha:</p>
                        </div>
                    </div>
                    <div class="campo-input">
                        <form class="form" method="post" action="../controller/form-recuperaSenha.php">

                            <div class="hayley-williams">
                                <div class="campo-holder">
                                    <div class="label-irado">
                                        <div class="lembrar-me-holder label">
                                            E-mail:
                                        </div>
                                    </div>
                                    <div class="input-holder">
                                        <div class="lembrar-me-holder inputexc">
                                            <div class="teste">
                                                <img class="imagrresize" src="../assets/imagem/pngegg.png">
                                            </div>
                                            <input type="email" class="input-reg" name="recupera-email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hayley-williams" id="mirtazapine">
                                <div class="split50"><button type="submit" class="btn btn-warning botao-registro" id="botao-enviar-cred">Enviar</button></div>
                                <div class="split50">
                                    <img src="../assets/imagem/voltarLogin.png" class="resize-13">
                                    <a href="./login.php">Voltar ao Login</a>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="legal-holder">
                        <p>© 2026 obra. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>