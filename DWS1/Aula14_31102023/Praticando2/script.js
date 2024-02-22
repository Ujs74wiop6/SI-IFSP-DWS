function limpar(n1, n2, result){
    document.getElementById("n1").value = "";
    document.getElementById("n2").value = "";
    document.getElementById("result").value = "";
}
function somar(n1, n2){
    var n1 = parseFloat(document.getElementById("n1").value);
    var n2 = parseFloat(document.getElementById("n2").value);
    var resultado = (n1 + n2)
    document.getElementById("result").value = resultado
}
function subtrair(n1, n2){
    var n1 = parseFloat(document.getElementById("n1").value);
    var n2 = parseFloat(document.getElementById("n2").value);
    var resultado = (n1 - n2)
    document.getElementById("result").value = resultado
}
function multiplicar(n1, n2){
    var n1 = parseFloat(document.getElementById("n1").value);
    var n2 = parseFloat(document.getElementById("n2").value);
    var resultado = (n1 * n2)
    document.getElementById("result").value = resultado
}
function dividir(n1, n2){
    var n1 = parseFloat(document.getElementById("n1").value);
    var n2 = parseFloat(document.getElementById("n2").value);
    var resultado = (n1 / n2)
    document.getElementById("result").value = resultado
}