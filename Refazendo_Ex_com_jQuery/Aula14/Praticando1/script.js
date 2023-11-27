
//JS
//$nome = prompt("Qual seu nome?");
//document.getElementById("nome").innerHTML = $nome;

//jQuery
var nome = prompt("Qual seu nome?");
$("#nome").text(nome);

//JS
//function addText() {
//    $paragrafo = document.createElement("p");
//    $paragrafo.innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non neque cursus, mollis dolor nec, iaculis ex. Donec vulputate mi nec tincidunt efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quis lacus ut felis condimentum consequat vel nec dolor. Suspendisse potenti.";
//    document.body.appendChild($paragrafo);
//}

//jQuery
function addText() {
    var $paragrafo = $("<p>").html("Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non neque cursus, mollis dolor nec, iaculis ex. Donec vulputate mi nec tincidunt efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quis lacus ut felis condimentum consequat vel nec dolor. Suspendisse potenti.");
    $("body").append($paragrafo);
}

//JS
//function removeTodoOTexto() {
//    var paragrafos = document.getElementsByTagName("p");
//    for (var i = paragrafos.length - 1; i >= 0; i--) {
//        document.body.removeChild(paragrafos[i]);
//    }
//}

//jQuery
function removeTodoOTexto() {
    $("p").remove();
}

//JS
//function removeUmPorUm() {
//    $paragrafo = document.getElementsByTagName("p");
//    for (var i = 0; i < $paragrafo.length; i++) {
//        document.body.removeChild($paragrafo[i]);
//        i++;
//    }
//}

//jQuery
function removeUmPorUm() {
    $("p:first").remove();
}