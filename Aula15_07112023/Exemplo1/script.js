function addImagem(){
    document.querySelector("#caixa").innerHTML += 
    "<img src='https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png'/>";
}

function addParagrafo(){
    document.querySelector("#caixa").innerHTML += 
    "<p>Lorem ipsum dolor sit amet</p>";
}

function removerParagrafo(){
    for(let i = 0; i < document.querySelectorAll("p").length; i++){
        document.querySelectorAll("p")[i].remove();
    }
}

function removerImagem(){
    for(let i = 0; i < document.querySelectorAll("img").length; i++){
        document.querySelectorAll("img")[i].remove();
    }
}

function removerTudo(){
    document.querySelector("#caixa").innerHTML = "";
}