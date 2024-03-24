<?php 
use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;
require './vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>

    .cepreturngood{
        background-color: #69E179;
        border: 5px solid green;
        border-radius: 5px;
    }
    .cepreturnbad{
        background-color: #EB7B74;
        border: 5px solid red;
        border-radius: 5px;
    }

</style>
<body>
    <div class="container">
    <h1>Praticando CEP com Composer <a href="./doc/view-doc.php?file=installation-composer.md">doc*</a></h1>
        <form class="row g-3" action="index.php" method="POST">
            <div class="col-3">
                <div class="mb-2">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" name="cep" id="cep" required autofocus placeholder="Somente números">
                </div>
            </div>
            <div class="col-4">
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>
        </form></br>
        <?php 
            if (isset($_POST["cep"])) {
                $cep = $_POST["cep"];
                try{
                    $address = CepPromise::fetch($cep);

                    echo"<div class='cepreturngood'>";
                        echo "<h2>CEP: " . $address->zipCode . "</h2>";
                        echo "<p>Rua: " . $address->district . "</p>";
                        echo "<p>Bairro: " . $address->street . "</p>";
                        echo "<p>Cidade: " . $address->city . "</p>";
                        echo "<p>Estado: " . $address->state . "</p>";
                    echo"<div>";
                    $cep = $address->zipCode;

                }catch(CepPromiseException $e){

                    echo"<div class='cepreturnbad'>";
                        $address = $e->toArray();
                        echo "<h2>CEP: " . $cep . "</h2>";
                        echo "<p> Detalhes do erro</p>";
                        echo " <li>" . $address['message'] . "</li>";
                        echo " <li>" . $address['errors'][0]['message'] . "</li>";
                        echo " <li>" . $address['errors'][1]['message'] . "</li>";
                       #echo " <li>" . $address['errors'][2]['message'] . "</li>";
                    echo "</div>";

                }
            }
        ?>
        <a href="../../index.html">Voltar</a>
    </div>
</body>
</html>