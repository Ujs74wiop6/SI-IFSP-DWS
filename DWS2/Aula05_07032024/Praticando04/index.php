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
        <form action="tabela.php" method="POST">
        <div class="row mb-3">
          <label for="n1" class="col-sm-2 col-form-label col-form-label-lg">Colunas:</label>
            <div class="col-sm-2">
                <input type="number" step="0.5" class="form-control form-control-lg" name="n1" id="n1">
            </div>
            <label for="n2" class="col-sm-2 col-form-label col-form-label-lg">Linhas:</label>
            <div class="col-sm-2">
                <input type="number" step="0.5" class="form-control form-control-lg" name="n2" id="n3">
            </div>
            <label for="n3" class="col-sm-2 col-form-label col-form-label-lg">Estilo:</label>
            <div class="col-sm-2">
            <select name="n3" id="n3" class="form-select">
              <option value="table-primary">table-primary</option>
              <option value="table-success">table-success</option>
              <option value="table-waring">table-waring</option>
              <option value="table-dark">table-dark</option>
              <option value="table-danger">table-danger</option>
            </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="index.php" class="btn btn-warning">Limpar</a>
        </form><br>
    </div>
    <a href="../index.php">Voltar</a></br>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>