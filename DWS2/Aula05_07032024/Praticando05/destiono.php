<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bloco {
            border: 2px solid #000;
            padding: 10px;
            color: black;
            background-color: moccasin;
        }
    </style>
</head>
<body>
    <h1>Destino</h1>
    <hr>
    <div class="container">
        <form>
        <div class="row">
            <div class="col">
            <?php 
                if(isset($_POST["interesses"])) {
                    $interesses = $_POST["interesses"];
                    echo "<h3>Dados da requisição:</h3>";
                    echo "<div class='bloco'><pre>"; 
                    echo var_dump($interesses);
                    echo "</pre></div>";                    
                    echo "<h3>Interesses relacionados (em ordem alfabética)</h3>";

                    sort($interesses);

                    if(count($interesses) == 3){ 
                        echo  " - ". $interesses[0] ."</br>";
                        echo  " - ". $interesses[1] ."</br>";
                        echo  " - ". $interesses[2] ."</br>";
                    } elseif(count($interesses) > 3) {
                        echo  " - ". $interesses[0] ."</br>";
                        echo  " - ". $interesses[1] ."</br>";
                        echo  " - ". $interesses[2] ."</br>";
                        echo "...";    
                    } elseif(count($interesses) == 2) {
                        echo  " - ". $interesses[0] ."</br>";
                        echo  " - ". $interesses[1] ."</br>";
                    } elseif(count($interesses) == 1) {
                        echo  " - ". $interesses[0] ."</br>";
                    }
                } else {
                    echo "<p>Nenhum interesse selecionado.</p>";
                }
            ?>

            </div>
        </div>
        
        <a href="index.php">Voltar para o formulário</a></br>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
