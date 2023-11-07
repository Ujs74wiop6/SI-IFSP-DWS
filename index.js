document.getElementById("go-button").addEventListener("click", function() {
    var select = document.getElementById("aula-select");
    var selectedValue = select.options[select.selectedIndex].value;
    var loadingDiv = document.getElementById("loading");

    if (selectedValue) {
        loadingDiv.style.display = "block"; 
        setTimeout(function() {
            window.location.href = selectedValue;
        }, 2500); 
    }
});