let switchPopUp = 0;
let popupHolder = document.getElementById("pop-up");
let botaoFechar = document.getElementById("fechar");

function popupar() {
    let pop_autor = document.getElementById("autor");
    let pop_data = document.getElementById("data");
    let pop_titulo = document.getElementById("titulo");
    let pop_materiais = document.getElementById("materiais");
    let pop_descricao = document.getElementById("descricao");
    let pop_imagem = document.getElementById("momentociencia");

    let pop_autorA = document.getElementById("jorge-autor");
    let pop_dataA = document.getElementById("jorge-data");
    let pop_tituloA = document.getElementById("jorge-titulo");
    let pop_materiaisA = document.getElementById("jorge-materiais");
    let pop_descricaoA = document.getElementById("jorge-descricao");
    let pop_imagemA = document.getElementById("jorge-imagem");

    pop_autorA.value = pop_autor.value;
    pop_dataA.value = pop_data.value;
    pop_tituloA.value = pop_titulo.value;
    pop_materiaisA.value = pop_materiais.value;
    pop_descricaoA.value = pop_descricao.value;

    popupHolder.style.display = "flex";

}



botaoFechar.addEventListener("click", function(){
    popupHolder.style.display = "none";
});