// Aguarda o DOM carregar completamente o HTML... Antes de chamar a função em questão!
$(document).ready(function(){
    // Acionando uma função ao cliclar no elemento (nesse cado o botão) com id = 'btnGravarDados'...
    $('#btnGravarDados').on('click', function (e){
        // Função anonima  == função sem nome em especifico
        // Nesse caso o trecho "e.preventDefault();" está sendo usado para cancelar a ação associada ao evento Js
        // Com mais detalhes, essa função cancela o comportamento padrão desse evento, garantindo que a página não seja recarregada quando o evento ocorrer
        e.preventDefault();

        // Declarando as variáveis [nome, email] que recebem os valores dos elementos [nome, email]...
        var nome = $('#nome').val();
        var email = $('#email').val();

        // Validação para checar se os valores dos elementos não são nulos...
        if(nome === '' || email === ''){
            alert('Preecha todos os dados, por favor!')
            return;
        }

        // Inicio de uma chamada AJAX usando jQuery em JavaScript
        // O AJAX é utilizado para realizar requisições de forma assíncrona
        $.ajax({
            
            // URL da API
            url: 'https://epansani.com.br/2023/dw1s4/ajax/ins.php',
            
            // Método HTTP a ser usado na requisição | POST: serve para solicitar ao sevidor os dados anexados no corpo da requisição para armazenamento
            type: 'POST',

            // Tipo do Dado esperado na resposta da requisição
            dataType: 'json',

            // Os dados envolvidos na requisição
            data: { nome : nome, email : email },

            // função a ser chamada caso a requisição for bem-sucedida
            success: function (data){

                // verifica se a resposta do servidor é verdadeira
                if(data){
                    sucesso();
                    limparCampos();
                    atualizarDados();
                }else{
                    alert('Erro ao gravar dados...');
                }
            },
            // Tratamento de erro na requisição
            error: function (error){
                console.error('Erro na requisição: ', error);
            }
        });
    });

    // função para limpar os campos quando clicado...
    $('#btnLimparDados').on('click', function(e){
        e.preventDefault();
        limparCampos();
    });

    // função para atualizar os campos quando clicado...
    $('#btnAtualizarDados').on('click', function(e){
        e.preventDefault();
        atualizarDados();
    });

    function limparCampos(){
        $('#email').val('');
        $('#nome').val('');
    }

    function atualizarDados(){
        $.ajax({
            url: 'https://epansani.com.br/2023/dw1s4/ajax/list.php',
            // Método GET: serve para recuperar/pedir os dados que estão no servidor 
            type: 'GET',
            dataType: 'json',
            success: function(data){
                // Remove e limpa todos os dados do elemento (tabela) antes de adicionar novos...
                $('#tabela').empty();
                // Realiza a iteração sobre cada item no array de dados retornado pela requisição AJAX 
                data.forEach(function (item){
                    // Para cada item, é adicionado uma nova estrutura como é mostrado abaixo: 
                    $('#tabela').append(
                        `<tr>
                            <td>${item.nome}</td>
                            <td>${item.email}</td>
                            <td><button class="btn btn-danger btnExcluir" data-id="${item.id}">Apagar</button></td>
                        </tr>`
                    );
                });

                // Função acionada ao clicar no elemento: btnExcluir
                $('.btnExcluir').on('click', function (){
                    let confirmacao = confirm('Realmente quer apagar o registro?');
                    // Verifica a confirmação
                    if(!confirmacao){
                        return;
                    }
                    // Pega o id do item e em seguida chama a função excluir...
                    var id = $(this).data('id');
                    excluirRegistro(id);
                });
            },
            error: function(error){
                console.error('Erro na requisição: ', error);
            }
        });
    }

    function excluirRegistro(id){
        $.ajax({
            url: 'https://epansani.com.br/2023/dw1s4/ajax/rem.php',
            type: 'POST',
            dataType: 'json',
            data: { id: id },
            success: function(data){
                if(data){
                    alert('Registro excluído com sucesso!');
                    atualizarDados();
                }else{
                    alert('Erro ao excluir o registro!');
                }
            },
            error: function(error){
                console.error('Erro na requisição: ', error);
            }
        });
    }

    function sucesso(){
        // Seleciona o elemento 'msg' e remove a classe CSS (d-none)
        $('#msg').removeClass('d-none');
        // Seleciona o elemento 'msg' e adiciona a classe CSS (d-block)
        $('#msg').addClass('d-block');
        // Função para agendar a ser execução da função anonima no tempo de 5000 mil'segundos = 5 segundos
        setTimeout(function (){
        $('#msg').removeClass('d-block');
        $('#msg').addClass('d-none');
        }, 5000);
    }
    atualizarDados();
});