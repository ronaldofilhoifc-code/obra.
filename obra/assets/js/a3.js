let communistDaughter = document.getElementById("pesquisaConfig");

window.addEventListener("resize", function () {

  if (window.innerWidth <= 768) {
    communistDaughter.placeholder = "Pesquise aqui!";
  } else {
    communistDaughter.placeholder = "Pesquise uma configuração.";
  }

});

if (window.innerWidth <= 768) {
  communistDaughter.placeholder = "Pesquise aqui!";
} else {
  communistDaughter.placeholder = "Pesquise uma configuração.";
}