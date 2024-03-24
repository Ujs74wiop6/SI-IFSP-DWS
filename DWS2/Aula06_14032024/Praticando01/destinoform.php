<?php 
require 'cabecalho.php'
?>
<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Info Cadastro - Contato</h1>
    </div>

    <?php 

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    $hours = date("H:i:s");

    $dataAtual = getdate();

    $dia = $dataAtual['mday'];
    $mes = $dataAtual['mon']; 
    $ano = $dataAtual['year'];
    $nrand = rand(1, 2000);

    $arquivo = "./data/Contato_".$dia."_".$mes."_".$ano."_".$nrand.".txt";
    
    $conteudo = "
    Contato via site:

    Data: $dia/$mes/$ano - $hours

    Nome: $nome
    Email: $email
    Mensagem: $msg
    
    ---------------------------------------------------------";

    $arquivo = str_replace(' ', '', $arquivo);

    file_put_contents($arquivo, $conteudo);

    echo "Nome informado: ".$nome. "</br>";
    echo "Email: " .$email. "</br>";
    echo "Mensagem: " .$msg. "</br>";
    echo "Data: " .$dia."/".$mes."/".$ano. " - " .$hours."</br>";

    ?>
    <a href="contato.php" class="btn btn-info">Voltar</a>

</div>
<?php 
require 'rodape.php'
?>