<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Praticando - Caluladora de Média</h1>
    <hr>
    </div>
    <div class="container">
        <?php 
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];

        $media = ($n1 + $n2 + $n3)/3;

        $resultado = "";

        if($media >= 4 && $media < 6) {
            $resultado = "<h3>Com essa média o aluno está de <span style='color: yellow; text-decoration: underline;'>DE RECUPERAÇÃO</span></h3>";            
        }else if ($media >= 6){
            $resultado = "<h3>Com essa média o aluno está de <span style='color: green; text-decoration: underline;'>APROVADO</span></h3>";
        }else{
            $resultado = "<h3>Com essa média o aluno está de <span style='color: red; text-decoration: underline;'>REPROVADO</span></h3>";
        }
        echo "
        <h3>
            Um aluno com as notas <span style='font-weight: bold;'>$n1</span>, <span style='font-weight: bold;'>$n2</span> e <span style='font-weight: bold;'>$n3</span> tem média igual a <span style='font-weight: bold; color: black;'>$media</span> </br></br>
            $resultado
        </h3>
        ";

        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>