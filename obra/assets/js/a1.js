let theFool = document.getElementById("pesquisaHome");

window.addEventListener("resize", function () {

  if (window.innerWidth <= 768) {
    theFool.placeholder = "Pesquise aqui!";
  } else {
    theFool.placeholder = "Qual obra iremos ver hoje?";
  }

});

if (window.innerWidth <= 768) {
  theFool.placeholder = "Pesquise aqui!";
} else {
  theFool.placeholder = "Qual obra iremos ver hoje?";

}