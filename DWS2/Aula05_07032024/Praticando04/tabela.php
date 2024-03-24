<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Praticando 4 - Gerador de Tabela</h1>
    <hr>
    <div class="container">
     <?php 
     $n1 = $_POST["n1"];
     $n2 = $_POST["n2"];
     $n3 = $_POST["n3"];
    ?>
    <h3>Tabela <?php echo $n1 ?> x <?php echo $n2 ?></h3>
    <table class="table <?= $n3 ?>">
        <?php 
        for($i = 1; $i <= $n1; $i++){
            echo "<tr>";
            for($j = 1; $j <= $n2; $j++){
                echo "<th>-</th>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    
    </form><br>
    </div>
    <a href="./index.php">Voltar</a></br>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>