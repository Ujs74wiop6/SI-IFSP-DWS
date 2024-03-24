<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Formulário</h1>
    <hr>
    <p>Escolha alguns interesses: Músicas Populares Brasileiras (MPB)</p>
    <div class="container">
        <form action="destiono.php" method="POST">
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Quase um segundo - Cazuza">
                    <label class="form-check-label"> Quase um segundo - Cazuza</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Preciso me Encontrar - Cartola">
                    <label class="form-check-label"> Preciso me Encontrar - Cartola</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Flor de Lis - Djavan">
                    <label class="form-check-label"> Flor de Lis - Djavan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Pra você guardei o amor - Nando Reis">
                    <label class="form-check-label"> Pra você guardei o amor - Nando Reis</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Apenas um rapaz Latino Americano">
                    <label class="form-check-label"> Apenas um rapaz Latino Americano</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="La Belle de Jour">
                    <label class="form-check-label"> La Belle de Jour</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Ai, Ai, Ai - Vanessa da Mata">
                    <label class="form-check-label"> Ai, Ai, Ai - Vanessa da Mata</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Como eu quero - Kid Abelha">
                    <label class="form-check-label"> Como eu quero - Kid Abelha</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Onde anda você - Toquinho">
                    <label class="form-check-label" > Onde anda você - Toquinho</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Eu te adoro - Djavan">
                    <label class="form-check-label" > Eu te adoro - Djavan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Chão de Giz - Zé Ramalho">
                    <label class="form-check-label" > Chão de Giz - Zé Ramalho</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Aquarela - Toquinho">
                    <label class="form-check-label" > Aquarela - Toquinho</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Construção - Chico Buarque">
                    <label class="form-check-label" > Construção - Chico Buarque</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Pra não dizer que não falei das flores - Geraldo Vandré">
                    <label class="form-check-label" > Pra não dizer que não falei das flores - Geraldo Vandré</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Samba de Verão - Marcos Valle">
                    <label class="form-check-label" > Samba de Verão - Marcos Valle</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Águas de Março - Tom Jobim">
                    <label class="form-check-label" > Águas de Março - Tom Jobim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Trem das Cores - Caetano Veloso">
                    <label class="form-check-label" > Trem das Cores - Caetano Veloso</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Velha Infância - Tribalistas">
                    <label class="form-check-label" > Velha Infância - Tribalistas</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Canta, canta minha gente - Martinho da Vila">
                    <label class="form-check-label" > Canta, canta minha gente - Martinho da Vila</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Carolina - Seu Jorge">
                    <label class="form-check-label" > Carolina - Seu Jorge</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Romaria - Elis Regina">
                    <label class="form-check-label" > Romaria - Elis Regina</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Ondas paralelas - Belchior">
                    <label class="form-check-label" > Ondas paralelas - Belchior</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Na hora do gol - Belchior">
                    <label class="form-check-label" > Na hora do gol - Belchior</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="interesses[]" type="checkbox" value="Todo mundo maravilhoso - Belchior">
                    <label class="form-check-label" > Todo mundo maravilhoso - Belchior</label>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>
    <a href="../index.php">Voltar</a></br>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
