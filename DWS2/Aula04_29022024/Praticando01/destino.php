<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $nome = filter_input(INPUT_GET,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET,"email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET,"cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h1>Destino GET</h1>
    <hr>
    <p>Nome: <?php echo $nome ?></p>
    <p>E-mail: <?php echo $email ?></p>

    <p><a href="destino.php?nome=Fabricio&email=fabricio@gmail&cor=<?php echo $cor ?>">[nome: Fabricio, email: fabricio@gmail.com]</a></p>
    <p><a href="destino.php?nome=José&email=jose@gmail.com&cor=<?php echo $cor ?>">[nome: José, email: jose@gmail.com]</a></p>
    <p><a href="destino.php">Limpa tudo</a></p>

    <?php
        echo "
        <style>
        body{
            background-color: $cor;
        }
        img{
            width: 250px; 
            height: 250px;
        }
        </style>";
    ?>
    <a href="destino.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=red">
        <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/red.png"/>
    </a>
    <a href="destino.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=green">
        <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/green.png">
    </a>
    <a href="destino.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=blue">
        <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/blue.png">
    </a>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>