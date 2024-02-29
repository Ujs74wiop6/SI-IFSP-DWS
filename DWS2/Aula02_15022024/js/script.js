document.addEventListener("DOMContentLoaded", function() {
    var telefoneInput = document.getElementById("telefone");
    
    telefoneInput.addEventListener("input", function(event) {
      var inputValue = event.target.value.replace(/\D/g, '');
      var formattedValue = formatTelefone(inputValue);
      telefoneInput.value = formattedValue;
    });
    
    function formatTelefone(value) {
      var formattedValue = "(" + value.slice(0, 2) + ")" + value.slice(2, 7) + "-" + value.slice(7, 11);
      return formattedValue;
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
    var cpfInput = document.getElementById("cpf");
    
    cpfInput.addEventListener("input", function(event) {
      var inputValue = event.target.value.replace(/\D/g, '');
      var formattedValue = formatCPF(inputValue);
      cpfInput.value = formattedValue;
    });
    
    function formatCPF(value) {
      var formattedValue = value.slice(0, 3) + "." + value.slice(3, 6) + "." + value.slice(6, 9) + "-" + value.slice(9, 11);
      return formattedValue;
    }
  });  

  document.addEventListener("DOMContentLoaded", function() {
    var cepInput = document.getElementById("cep");
    
    cepInput.addEventListener("input", function(event) {
      var inputValue = event.target.value.replace(/\D/g, '');
      var formattedValue = formatCEP(inputValue);
      cepInput.value = formattedValue;
    });
    
    function formatCEP(value) {
      var formattedValue = value.slice(0, 2) + "." + value.slice(2, 5) + "-" + value.slice(5, 8);
      return formattedValue;
    }
  });  