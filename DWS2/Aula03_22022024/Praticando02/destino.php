<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>
        <?php 
        $titulo = $_POST["titulo"];
        echo "$titulo"
        ?>
    </title>
</head>
<body>
<?php
    //print_r($_POST);
    $corpo = $_POST["corpo"];
    $cor = $_POST["cor_texto"];
    $img = $_POST["url_img"];
    $link = $_POST["url_link"];
    $plano = $_POST["plano_fundo"];

    echo "<h1>$titulo</h1><br><hr>";
    echo "<h3>$corpo</h3><br>";
    echo "
    <style>
        body {
            text-align: center;
            background-color: $plano;
            color: $cor;
        }
    </style>
    ";
    echo "<a target='_blank' href='$link'>Link</a><br>";
    echo "<img src='$img' style='width: 250px; height: 250px;'/><br>";
    echo "<a href='/'>Voltar</a>";
?>    
</body>
</html>