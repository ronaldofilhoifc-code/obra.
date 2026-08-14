<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <title>Login na sua conta obra.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Inserção do Bootstrap versão 4 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- Fim insercão Bootstrap Versão 4-->
  <!-- Javascript do site-->
  <!-- css do site-->
  <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
</head>

<body>



  <div class="container">
    <div class="row">
      <div class="col-md-12 holder-main-page">

        <div class="info-holder">
          <div class="texto-crie">

            <div class="new-moldura-holder">
              <img src="../assets/imagem/LOGIN-FRAMEICON.png" class="imagemicone">
            </div>
            <div class="new-teto-holder" id="titulo">
              <p>Bem-vindo de volta!</p>
            </div>
            <div class="new-teto-holder" id="linha-fina">
              <p>Faça login na sua conta.</p>
            </div>

          </div>
          <div class="informacoes">
            <form name="form-login" class="form-login" method="post" action="../controller/login.php">


              <div class="campos-de-login">

                <div class="campo-holder">
                  <div class="label-irado">
                    <div class="lembrar-me-holder label" id="tipoTexto">
                      E-mail:
                    </div>
                  </div>
                  <div class="input-holder">
                    <div class="lembrar-me-holder inputexc">
                      <div class="teste">
                        <img class="imagrresize" src="../assets/imagem/pngegg.png" id="icone">
                      </div>

                      <div class="input-reg" id="bozo">

                        <div class='new-input-parent'><input placeholder="Digite seu email:" id='oImput' type='text'
                            name='email' class='input-alteravel'></div>

                      </div>
                      <div class="teste botaoUser" id="botaoUser">
                        <img src="../assets/imagem/perfil.png" class="imagrresize" id="mudar">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="campo-holder">
                  <div class="label-irado">
                    <div class="lembrar-me-holder label">
                      Senha:
                    </div>
                  </div>
                  <div class="input-holder">
                    <div class="lembrar-me-holder inputexc">

                      <div class="teste">
                        <img class="imagrresize" src="../assets/imagem/chaveiro.png">
                      </div>

                      <div class="input-reg" id="bozo2">

                        <div class='new-input-parent'><input placeholder="Digite sua senha:" id='oImputSenha' type='password'
                            name='senha' class='input-alteravel'></div>

                      </div>
                      <div class="teste botaoUser" id="botaoChange">
                        <img src="../assets/imagem/visivel.png" class="imagrresize" id="mudarChange">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="lembrar-me">
                <div class="lembrar-me-holder">
                  <div class="split50-new">
                    <input type="checkbox" class="resize-25" id="soPointer" name="marcos">
                    <p>Lembrar-me</p>
                  </div>
                  <div class="split50-new" id="split-direita">
                    <a href="recuperaSenha.php">Esqueci minha senha</a>
                  </div>
                </div>
              </div>
              <div class="button-holder-wow">
                <input type="hidden" value="0" name="tipo" id="tipo"> 
                <button type="submit" class="btn btn-warning botao-registro" id="botao-enviar-cred">Enviar</button>
              </div>


            </form>
          </div>
          <div class="legal-holder-2">
            <div class="continue-holder" id="continuecom">
              <div class="split-30-extra">
                <hr class="thedivisionbell">
              </div>
              <div class="split-30-extra">Ou continue com:</div>
              <div class="split-30-extra">
                <hr class="thedivisionbell">
              </div>
            </div>
            <div class="terceiros-holder">
              <div class="split-30-extra">
                <div class="botao-terceiro"><img src="../assets/imagem/google-logo.png" class="terceiro-icon"></div>
              </div>
              <div class="split-30-extra">
                <div class="botao-terceiro"><img src="../assets/imagem/facebook2.png" class="terceiro-icon"></div>
              </div>
              <div class="split-30-extra">
                <div class="botao-terceiro"><img src="../assets/imagem/xvsfelonmusk.png" class="terceiro-icon"></div>
              </div>
            </div>
            <div class="continue-holder" id="registre-se">
              <p>Não tem uma conta? <a href="./registrar.php">Registre-se</a></p>
            </div>
          </div>




        </div>

        <div class="legal-holder">
          <a href="#">Ajuda</a>
          <a href="#">Privacidade</a>
          <a href="#">Termos</a>
        </div>
      </div>

    </div>
  </div>






</body>
<script src="../assets/js/jotaessestemporarios.js"></script>
<script src="../assets/js/adicionaImput.js"></script>

</html>