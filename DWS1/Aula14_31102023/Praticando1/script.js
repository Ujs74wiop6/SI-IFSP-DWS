$nome = prompt("Qual seu nome?");
document.getElementById("nome").innerHTML = $nome;

function addText() {
    $paragrafo = document.createElement("p");
    $paragrafo.innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non neque cursus, mollis dolor nec, iaculis ex. Donec vulputate mi nec tincidunt efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quis lacus ut felis condimentum consequat vel nec dolor. Suspendisse potenti.";
    document.body.appendChild($paragrafo);
}

function removeTodoOTexto() {
    var paragrafos = document.getElementsByTagName("p");
    for (var i = paragrafos.length - 1; i >= 0; i--) {
        document.body.removeChild(paragrafos[i]);
    }
}

function removeUmPorUm() {
    $paragrafo = document.getElementsByTagName("p");
    for (var i = 0; i < $paragrafo.length; i++) {
        document.body.removeChild($paragrafo[i]);
        i++;
    }
}
