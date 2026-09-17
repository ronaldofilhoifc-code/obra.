let switchPopUp = 0;
let popupHolder = document.getElementById("pop-up");
let botaoFechar = document.getElementById("fechar");
let etiqueta = document.getElementById("etiqueta");
let shadow = document.getElementById("eusintooshadow");
let botaoPopUp = document.getElementById("bloqueador");

let ondeParou = -1;

let inputImagem = document.getElementById("momentociencia");
let previewImagem = document.getElementById("preview-imagem");
let previewUpload = document.getElementById("preview-upload");
let uploadIcon = document.getElementById("upload-icon");
let textoUpload = document.getElementById("texto-upload");
let textoTamanho = document.getElementById("texto-tamanho");
let textoImagem = document.getElementById("texto-imagem");

inputImagem.addEventListener("change", function () {

    let arquivo = this.files[0];

    if (!arquivo) {
        return;
    }

    if (!arquivo.type.startsWith("image/")) {

        alert("Selecione uma imagem válida.");

        this.value = "";

        return;
    }

    if (arquivo.size > 10 * 1024 * 1024) {

        alert("A imagem deve ter no máximo 10MB.");

        this.value = "";

        return;
    }

    let imagemURL = URL.createObjectURL(arquivo);


    previewUpload.src = imagemURL;

    previewUpload.style.display = "block";

    uploadIcon.style.display = "none";

    textoUpload.style.display = "none";

    textoTamanho.style.display = "none";

    textoImagem.style.display = "none";

    previewImagem.src = imagemURL;

    previewImagem.style.display = "block";

});

function popupar() {

    let temVazio = false;

    let autor = [
        document.getElementById("autor").value,
        document.getElementById("data").value,
        document.getElementById("titulo").value,
        document.getElementById("materiais").value,
        document.getElementById("descricao").value
    ];

    // Verifica os campos de texto
    for (let i = 0; i < autor.length; i++) {

        if (autor[i].trim() == "") {
            temVazio = true;
            break;
        }
    }

    // Verifica se existe imagem
    if (inputImagem.files.length === 0) {
        temVazio = true;
    }


    if (temVazio) {

        popupHolder.style.display = "flex";

        shadow.style.filter = "brightness(25%)";

        etiqueta.innerHTML = "";
        etiqueta.innerHTML =
            "Não é possível publicar. Preencha todos os campos e selecione uma imagem.";

        botaoPopUp.classList.add("bloqueado");
        botaoPopUp.textContent = "Não permitido";

        return;
    }


    // Preenche os campos escondidos
    document.getElementById("jorge-autor").value = autor[0];
    document.getElementById("jorge-data").value = autor[1];
    document.getElementById("jorge-titulo").value = autor[2];
    document.getElementById("jorge-materiais").value = autor[3];
    document.getElementById("jorge-descricao").value = autor[4];


    // Mostra o popup
    popupHolder.style.display = "flex";

    shadow.style.filter = "brightness(25%)";

    etiqueta.innerHTML =
        "<p>" +
        "Autor: " + autor[0] +
        "<br>Data: " + autor[1] +
        "<br>Título: " + autor[2] +
        "<br>Materiais: " + autor[3] +
        "<br>Descrição: " + autor[4] +
        "</p>";

    botaoPopUp.classList.remove("bloqueado");
    botaoPopUp.textContent = "Publicar";
}


// Fechar popup
botaoFechar.addEventListener("click", function () {

    popupHolder.style.display = "none";

    shadow.style.filter = "brightness(100%)";
});