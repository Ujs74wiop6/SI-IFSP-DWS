
// Função que de fato valida os campos do formulário

window.addEventListener('load', validaForm);
        document.getElementById('nome').addEventListener('input', validaForm);
        document.getElementById('email').addEventListener('input', validaForm);
        document.getElementById('telefone').addEventListener('input', validaForm);
        document.getElementById('idade').addEventListener('input', validaForm);
        document.getElementById('observacao').addEventListener('input', validaForm);

function validarCampo(campo) {
    var spanRequired = campo.parentElement.querySelector('.span-required');

    if (campo.value === '') {
        if (campo.id === 'idade') {  // Mensagem específica para idade! (🚫 Escolha um idade)(✅ Escolha uma idade)
            campo.style.borderColor = 'red';
            spanRequired.innerHTML = 'Por favor escolha uma ' + campo.name + ' 🚫';
            spanRequired.innerHTML += '</br>';
        } else {
            campo.style.borderColor = 'red';
            spanRequired.innerHTML = 'Por favor escolha um ' + campo.name + ' 🚫';
            spanRequired.innerHTML += '</br>';
        }
    } else {
        campo.style.borderColor = 'green';
        spanRequired.innerHTML = campo.name + ' parece bom! ✅ ';
        spanRequired.innerHTML += '</br>';
    }
}       

// Constantes (para pegar os id's dos elementos de maneira individual). Vãos ser usadas nas funções abaixo (com frequência)...

const nome = document.getElementById('nome');
const email = document.getElementById('email');
const idade = document.getElementById('idade');
const telefone = document.getElementById('telefone');
const observacao = document.getElementById('observacao');

// Função para chamar validar os campos de formulário

function validaForm() {
    validarCampo(nome);
    validarCampo(email);
    validarCampo(idade);
    validarCampo(telefone);
    validarCampo(observacao);
}

// Função para limpar o formulário

function btnLimpar(){
    nome.value = '';
    email.value = '';
    idade.value = '';
    telefone.value = '';
    observacao.value = '';
}

// Função para limpar o formulário e enviar um alerta de sucesso!

function btnEnviar() {
    btnLimpar();
    alert('Formulário enviado com sucesso! 📩');
}