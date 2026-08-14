$(document).ready(function () {

    let botaosino = 1;

    // botão de sino (ativar/desativar notificações)

    $(".sino2").click(function (e) {

        e.preventDefault();

        if (botaosino === 1) {
            alert("Notificações Ativadas!");
            botaosino = 0;
        } else if (botaosino === 0) {
            alert("Notificações Desativadas!");
            botaosino = 1;
        }

    });

    // redirect da mainpage para a tela de edição de publicações

    $("#botaoeditmain").click(function (e) {

        e.preventDefault();

        window.location.href = "postagem.php";

    });

    // redirect da tela de dição de publicações para a mainpage

    $("#botaoedit").click(function (e) {

        e.preventDefault();

        window.location.href = "homepage.php";

    });

    // Botões da tela principal que te levam para o início / perfil / configurações

    // botão de início

    $(".homeA").click(function (event) {

        event.preventDefault();

        window.location.href = "homepage.php";

    });

    // botão de perfil

    $(".perfilA").click(function (event) {

        event.preventDefault();

        window.location.href = "homePerfil.php";

    });

    // botão de configurações

    

    // Função que determina se o checkbox e o tipo de conta foram clicados para permitir o cadastro

    let flagtipos = 0;
    let artista = 0;
    let amante = 0;

    function liberaBotao() {

        if (flagData === 1 && flagtipos === 1) {
            $(".botao-registro").css("pointer-events", "auto");
            $(".botao-registro").css("background-color", "#ff9800");
            $(".botao-registro").css("border-color", "#ff9800");
        } else {
            $(".botao-registro").css("pointer-events", "none");
            $(".botao-registro").css("background-color", "#bbb5b5");
            $(".botao-registro").css("border-color", "#bbb5b5");
        }

    }

    $("#artista").click(function () {

        flagtipos = 1;

        artista = 1;
        amante = 0;

        $("#amante").css("background-color", "#f0e8e6");
        $("#artista").css("background-color", "#e4a264ff");

        liberaBotao();

    });

    $("#amante").click(function () {

        flagtipos = 1;

        artista = 0;
        amante = 1;

        $("#artista").css("background-color", "#f0e8e6");
        $("#amante").css("background-color", "#e4a264ff");

        liberaBotao();

    });

    let flagData = 0;

    $("#radio-data-steal").click(function () {

        if (flagData === 0) {
            flagData = 1;
        } else {
            flagData = 0;
        }

        liberaBotao();

    });

    // Função que envia para o php qual o tipo da conta

    let inputTipo = document.getElementById("reg-tipo");

    function checaTipo() {

        if (artista === 1) {
            inputTipo.value = "Artista";
        } else {
            inputTipo.value = "Amante de arte";
        }

    }

    $("#form-registrar").submit(function () {
        checaTipo();
    });

});