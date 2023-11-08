function desligaLampada(){

    var paragrafos = document.getElementsByTagName("h2");
    for (var i = paragrafos.length - 1; i >= 0; i--) {
        document.body.removeChild(paragrafos[i]);
    }

    document.querySelector("#lampada").innerHTML = 
    "<img width='180px' height='200px' src='../img/lampada.png''/>";
    document.body.style.backgroundColor = "black";

    paragrafos = document.createElement("h2");
    paragrafos.innerHTML = "<center>Lampada Desligada</center>";
    document.body.appendChild(paragrafos);

    document.body.style.color = "white";
    document.body.style.color = "white";
}

function ligaLampada(){

    var paragrafos = document.getElementsByTagName("h2");
    for (var i = paragrafos.length - 1; i >= 0; i--) {
        document.body.removeChild(paragrafos[i]);
    }

    document.querySelector("#lampada").innerHTML = 
    "<img width='180px' height='200px' src='../img/lampada-acesa.png'/>";
    document.body.style.backgroundColor = "white";

    paragrafos = document.createElement("h2");
    paragrafos.innerHTML = "<center>Lampada Ligada</center>";
    document.body.appendChild(paragrafos);

    document.body.style.color = "black";
    document.body.style.color = "black";
}