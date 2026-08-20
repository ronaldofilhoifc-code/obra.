let switchPopUp = 0;
let popupHolder = document.getElementById("pop-up");
let botaoFechar = document.getElementById("fechar");
let etiqueta = document.getElementById("etiqueta");
let shadow = document.getElementById("eusintooshadow");

let ondeParou = -1;
let botaoPopUp = document.getElementById("bloqueador");




function popupar() {
    let temVazio = false;
    popupHolder.style.display = "flex";
    shadow.style.filter = "grayscale(100%)";
    shadow.style.filter = "brightness(25%)";
    // inputs da pagina principal (postagem-) (para a imagem, o id é "momentociencia")

    let autor = [document.getElementById("autor").value, document.getElementById("data").value, document.getElementById("titulo").value,
    document.getElementById("materiais").value, document.getElementById("descricao").value];


    document.getElementById("jorge-autor").value = autor[0];
    document.getElementById("jorge-data").value = autor[1];
    document.getElementById("jorge-titulo").value = autor[2];
    document.getElementById("jorge-materiais").value = autor[3];
    document.getElementById("jorge-descricao").value = autor[4];

    for (let i = 0; i < autor.length; i++) {
        if (autor[i] == "") {
            temVazio = true;
            ondeParou = i;
            break;
        }
    }

    if (temVazio) {
        etiqueta.innerHTML = "";
        let recibo = "Não é possível publicar, você não especificou todos os campos!";
        bloqueador.classList.add("bloqueado");
        bloqueador.textContent = "Não Permitido";
        etiqueta.innerHTML += recibo;
    } else {
        etiqueta.innerHTML = "";
        bloqueador.textContent = "Publicar";
        bloqueador.classList.remove("bloqueado");
        let recibo = "<p>Autor: " + autor[0] + "<br>Data: " + autor[1] + "<br>Título: " + autor[2] + "<br>Materiais: " + autor[3] + "<br> Descrição: " + autor[4] + "</p>";
        etiqueta.innerHTML += recibo;
    }




}





botaoFechar.addEventListener("click", function () {
    popupHolder.style.display = "none";
    shadow.style.filter = "grayscale(0%)";
    shadow.style.filter = "brightness(100%)";
});