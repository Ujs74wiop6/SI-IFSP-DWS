//JS
//function desligaLampada(){
//
//    var paragrafos = document.getElementsByTagName("h2");
//    for (var i = paragrafos.length - 1; i >= 0; i--) {
//        document.body.removeChild(paragrafos[i]);
//    }
//
//    document.querySelector("#lampada").innerHTML = 
//    "<img width='180px' height='200px' src='img/lampada.png''/>";
//    document.body.style.backgroundColor = "black";
//
//    paragrafos = document.createElement("h2");
//    paragrafos.innerHTML = "<center>Lampada Desligada</center>";
//    document.body.appendChild(paragrafos);
//
//    document.body.style.color = "white";
//    document.body.style.color = "white";
//}

//jQuery
function desligaLampada() {
    $("h2").remove();
    $("#lampada").html("<img width='180px' height='200px' src='img/lampada.png'/>");
    $("body").css({
        "background-color": "black",
        "color": "white"
    });
    var novoParagrafo = $("<h2>").html("<center>Lampada Desligada</center>");
    $("body").append(novoParagrafo);
}


//JS
//function ligaLampada(){
//
//    var paragrafos = document.getElementsByTagName("h2");
//    for (var i = paragrafos.length - 1; i >= 0; i--) {
//        document.body.removeChild(paragrafos[i]);
//    }
//
//    document.querySelector("#lampada").innerHTML = 
//    "<img width='180px' height='200px' src='img/lampada-acesa.png'/>";
//    document.body.style.backgroundColor = "white";
//
//    paragrafos = document.createElement("h2");
//    paragrafos.innerHTML = "<center>Lampada Ligada</center>";
//    document.body.appendChild(paragrafos);
//
//    document.body.style.color = "black";
//    document.body.style.color = "black";
//}

//jQuery
function ligaLampada() {
    $("h2").remove();
    $("#lampada").html("<img width='180px' height='200px' src='img/lampada-acesa.png'/>");
    $("body").css({
        "background-color": "white",
        "color": "black"
    });
    var novoParagrafo = $("<h2>").html("<center>Lampada Ligada</center>");
    $("body").append(novoParagrafo);
}
