<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Praticando 3 - Números primos</h1>
    <hr>
    <style>
        .primo {
            color: green;
        }

        .nao-primo {
            color: red;
        }
        .green {
            background-color: lightgreen;
            border: 2px solid green;
            padding: 5px;
            font-size: 1.5vw;
        }
        .red {
            background-color: salmon;
            border: 2px solid red;
            padding: 5px;
            font-size: 1.5vw;
        }
    </style>

    <div class="container">
        <form action="index.php" method="GET">
            <h3>
                <a href="index.php?n=1">Número1</a>
                <a href="index.php?n=2">Número2</a>
                <a href="index.php?n=3">Número3</a>
                <a href="index.php?n=5">Número5</a>
                <a href="index.php?n=20">Número20</a>
                <a href="index.php?n=32">Número32</a>
                <a href="index.php?n=37">Número37</a>
            </h3>
            <?php
                if(isset($_GET["n"]) && is_numeric($_GET["n"]) && $_GET["n"] > 0) {
                    $n = intval($_GET["n"]);
                
                    $par = $n % 2 == 0 ? "PAR" : "ÍMPAR";

                    if ($n == 0 || $n == 1) {
                        echo "<p>O número <span class='green'>$n</span> <span class='green'>NÂO É</span> cosiderado <span class='green'>PRIMO</span>. Além disso, é um número <span class='green'>$par</span>.</p>";
                    } else {
                        $primo = true;
                        for ($i = 2; $i * $i <= $n; $i++) {
                            if ($n % $i == 0) {
                                $primo = false;
                                break;
                            }
                        }
                        
                        if ($primo) {
                            echo "<p>O número <span class='green'>$n</span> <span class='green'>É</span> um número <span class='green'>PRIMO</span>. Além disso, é um número <span class='green'>$par</span>.</p>";
                        } else {
                            echo "<p>O número <span class='red'>$n</span> <span class='red'>NÂO É</span> um número <span class='red'>PRIMO</span>. Além disso, é um número <span class='red'>$par</span>.</p>";
                        }
                    }
                } else {}
            ?>
        </form>
    </div>
    <a href="../index.php">Voltar</a></br>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>