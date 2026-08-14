let ohComely = document.getElementById("pesquisaPerfil");

window.addEventListener("resize", function () {

  if (window.innerWidth <= 768) {
    ohComely.placeholder = "Pesquise aqui!";
  } else {
    ohComely.placeholder = "Pesquise algo sobre seu perfil!";
  }

});

if (window.innerWidth <= 768) {
  ohComely.placeholder = "Pesquise aqui!";
} else {
  ohComely.placeholder = "Pesquise algo sobre seu perfil!";
}