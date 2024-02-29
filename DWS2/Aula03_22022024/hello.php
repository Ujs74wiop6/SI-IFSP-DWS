<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>

    <a href="/Praticando01/index.php">Praticando 1</a><br>
    <a href="/Praticando02/index.php">Praticando 2</a><br><br>

    <h1>Calculator in PHP</h1>

    <form action="hello.php" method="post">
        <input type="number" name="n1" required> + 
        <input type="number" name="n2" required>
        <button type="submit">Somar</button>
    </form>

    <?php
        // https://www.php.net/manual/en/reserved.variables.server.php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $soma = $n1 + $n2;
            if (($n1 == 420 || $n2 == 420)) {
                http_response_code(420);
                echo "<script>console.log('Neste sistema, não é permitido fazer qualquer tipo de referência a droga')</script>"; 
                echo "<br><h2> 🚨 🚫 4:20 🔞 🚓</h2><br>";
                echo "<img src='https://http.cat/420'/>";
            } else {
                http_response_code(200);
                echo "<br><img src='https://http.cat/200'/>";
            }
            echo "<h2>$n1 + $n2 = $soma</h2>";
            echo "<h3>HTTP STATUS CODE: " . http_response_code()."</h3>";
        }
    ?>
</body>
</html>
