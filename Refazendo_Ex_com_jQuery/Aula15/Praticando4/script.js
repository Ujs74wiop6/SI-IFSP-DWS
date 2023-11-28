//let squareSelected = null;
//function updateSelected(squareId) {
//    const square = document.getElementById(squareId);
//    square.style.border = "5px solid yellow";
//
//    if (squareInMovement && squareId === squareSelected.id) {
//        moveParaPosicaoInicial(square);
//        squareInMovement = false;
//        squareSelected = null;
//    } else if (squareInMovement) {
//        alert("Atenção, há algum square Selected, desselecione-o para selecionar outro");
//    } else {
//        const isSelected = square === squareSelected;
//        const squares = document.querySelectorAll(".sqr");
//        
//        squares.forEach((sqr) => {
//            sqr.style.transform = "translate(0px, 0px)";
//        });
//
//        if (!isSelected) {
//            moveParaCentro(squareId);
//            squareSelected = square;
//            squareInMovement = true;
//        } else {
//            squareSelected = null;
//        }
//    }
//}


//jQuery
let squareSelected = null;

function updateSelected(squareId) {
    const square = $("#" + squareId);

    square.css('border', '5px solid yellow');

    if (squareInMovement && squareId === squareSelected.attr('id')) {
        moveParaPosicaoInicial(square[0]);
        squareInMovement = false;
        squareSelected = null;
    } else if (squareInMovement) {
        alert("Atenção, há algum square Selected, desselecione-o para selecionar outro");
    } else {
        const isSelected = square.is(squareSelected);
        const squares = $(".sqr");

        squares.css('transform', 'translate(0px, 0px)');

        if (!isSelected) {
            moveParaCentro(squareId);
            squareSelected = square;
            squareInMovement = true;
        } else {
            squareSelected = null;
        }
    }
}


//function moveParaPosicaoInicial(square) {
//    square.style.transform = "translate(0px, 0px)";
//    square.style.border = "5px solid black";
//}

//jQuery
function moveParaPosicaoInicial(square) {
    $(square).css({
        'transform': 'translate(0px, 0px)',
        'border': '5px solid black'
    });
}

//JS
//function moveParaCentro(squareId) {
//    const screen = document.querySelector(".container");
//    const screenWidth = screen.offsetWidth;
//    const screenHeight = screen.offsetHeight;
//    const square = document.getElementById(squareId);
//    const squareWidth = square.offsetWidth;
//    const squareHeight = square.offsetHeight;
//    const newX = (screenWidth - squareWidth) / 2.5;
//    const newY = (screenHeight - squareHeight) / 3;
//    square.style.transform = `translate(${newX}px, ${newY}px)`;
//}

//jQuery
function moveParaCentro(squareId) {
    const screen = $(".container");
    const screenWidth = screen.width();
    const screenHeight = screen.height();
    const square = $("#" + squareId);
    const squareWidth = square.width();
    const squareHeight = square.height();
    const newX = (screenWidth - squareWidth) / 2.5;
    const newY = (screenHeight - squareHeight) / 3;
    square.css('transform', `translate(${newX}px, ${newY}px)`);
}


let squareInMovement = false;

//JS
//document.addEventListener("keydown", function (event) {
//    if (squareSelected && squareInMovement) {
//        const key = event.key.toLowerCase();
//        switch (key) {
//            case "w":
//                moveSquare(0, -10);
//                break;
//            case "a":
//                moveSquare(-10, 0);
//                break;
//            case "s":
//                moveSquare(0, 10);
//                break;
//            case "d":
//                moveSquare(10, 0);
//                break;
//        }
//    }
//});

//jQuery
$(document).keydown(function(event) {
    if (squareSelected && squareInMovement) {
        const key = event.key.toLowerCase();
        switch (key) {
            case "w":
                moveSquare(0, -10);
                break;
            case "a":
                moveSquare(-10, 0);
                break;
            case "s":
                moveSquare(0, 10);
                break;
            case "d":
                moveSquare(10, 0);
                break;
        }
    }
});

//Js
//function moveSquare(deltaX, deltaY) {
//    const transform = getComputedStyle(squareSelected).transform;
//    
//    let currentX = 0;
//    let currentY = 0;
//
//    if (transform !== "none") {
//        const matrix = new DOMMatrix(transform);
//        currentX = matrix.m41;
//        currentY = matrix.m42;
//    }
//
//    const newX = currentX + deltaX;
//    const newY = currentY + deltaY;
//    
//    squareSelected.style.transform = `translate(${newX}px, ${newY}px)`;
//}

//jQuery
function moveSquare(deltaX, deltaY) {
    const transform = squareSelected.css('transform');
    
    let currentX = 0;
    let currentY = 0;

    if (transform !== 'none') {
        const values = transform.match(/(-?\d+(\.\d+)?)/g);
        if (values) {
            currentX = parseFloat(values[4]);
            currentY = parseFloat(values[5]);
        }
    }

    const newX = currentX + deltaX;
    const newY = currentY + deltaY;
    
    squareSelected.css('transform', `translate(${newX}px, ${newY}px)`);
}
