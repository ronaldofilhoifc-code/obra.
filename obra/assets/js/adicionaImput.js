let switchName = document.getElementById("botaoUser");
let input = document.getElementById("oImput");
let mudar = document.getElementById("mudar");
let icone = document.getElementById("icone");
let carseat = document.getElementById("tipoTexto");
let inputSenha = document.getElementById("oImputSenha");
let botaoVisivel = document.getElementById("botaoChange");
let imagemSenha = document.getElementById("mudarChange");

let akechi = document.getElementById("tipo");

let fixerUpper = 0;
let fixerUpper2 = 0;

botaoVisivel.addEventListener("click", function () {

    if (fixerUpper2 == 0) {
        inputSenha.type = "text";
        imagemSenha.src = "../assets/imagem/visivelsoquenao.png";
        fixerUpper2 = 1;
    } else {
        inputSenha.type = "password";
        imagemSenha.src = "../assets/imagem/visivel.png";
        fixerUpper2 = 0;
    }

});

switchName.addEventListener("click", function () {

    if (fixerUpper === 0) {
        input.setAttribute("name", "usuario");
        input.type = "text";
        carseat.innerText = "";
        carseat.innerText = "Usuário:";
        fixerUpper = 1;
        icone.src = "../assets/imagem/perfil.png";
        mudar.src = "../assets/imagem/pngegg.png";
        input.placeholder = "Digite seu usuário: ";
        akechi.value = "1";
    } else {
        input.setAttribute("name", "email");
        input.type = "email";
        carseat.innerText = "";
        carseat.innerText = "E-mail:";
        fixerUpper = 0;
        icone.src = "../assets/imagem/pngegg.png";
        mudar.src = "../assets/imagem/perfil.png";
        input.placeholder = "Digite seu email: ";
        akechi.value = "0";
    }

});