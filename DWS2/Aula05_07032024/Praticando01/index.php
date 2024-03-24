<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Praticando 1 - Tabuada</h1>
    <hr>
    <div class="container">
        <form action="index.php" method="GET">
        <div class="row mb-3">
          <label for="n1" class="col-sm-1 col-form-label col-form-label-lg">Número:</label>
            <div class="col-sm-2">
                <input type="number" step="0.5" class="form-control form-control-lg" name="n1" id="n1">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tabuada</button>
        <a href="index.php" class="btn btn-warning">Limpar</a>
        </form><br>
    
    <?php
    
    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
        for($i = 1; $i <= 10; $i++){
            $result = $n1*$i;
            echo"<p>$n1 x $i = $result</p>";
        }    
    }
    ?>
    <a href="../index.php">Voltar</a></br>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>