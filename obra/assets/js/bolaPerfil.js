


let bolaPerfil = document.getElementById("bolaPerfil2");
let nomeDaLambisgoia = document.getElementById("usuarioMini");
let sairPratico = document.getElementById("sairPratico");

let nome = nomeDaLambisgoia.value;
let i = 0;
let doisChars = "";


for (i = 0; i < nome.length; i++) {
  if (nome[i] == " " && nome[i] != nome.length - 1) {
    doisChars = nome[0] + nome[i + 1];
    break;
  } else {
    doisChars = nome[0] + nome[1];
  }
}

doisChars = doisChars.toUpperCase();

bolaPerfil.innerText = doisChars;

let jeffMangum = 0;

bolaPerfil.addEventListener("click", function () {

  if (jeffMangum == 0) {
    sairPratico.style.display = "flex";

    jeffMangum = 1;
  } else {
    sairPratico.style.display = "none";

    jeffMangum = 0;
  }

});
