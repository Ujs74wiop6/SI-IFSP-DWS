<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .bloco {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
    }

    img:hover {
      transform: scale(1.1);
      border: 2px solid green;
    }
    img {
      width: 250px;
      height: 250px;
    }
  </style>
</head>
<body>
<?php
  $clique = filter_input(INPUT_GET, 'clique', FILTER_SANITIZE_SPECIAL_CHARS);
  $ultimos = filter_input(INPUT_GET, 'ultimos', FILTER_SANITIZE_SPECIAL_CHARS);

  if ($clique) {
    switch ($clique) {
      case 'ubuntu':
        $distro = 'Ubuntu';
        $informacoes = '- Ano de Criação: 2004 <br> - Característica: Convergência entre usabilidade e estabilidade, foco em facilidade de uso<br> - Criador: Mark Shuttleworth';
        $ultimos .= "Ubuntu,";
        break;
      case 'arch':
        $distro = 'Arch';
        $informacoes = '- Ano de Criação: 2002 <br> - Característica: Abordagem minimalista e orientada para o usuário, com o slogan "Keep It Simple"<br> - Criador: Judd Vinet';
        $ultimos .= "Arch,";
        break;
      case 'kurumin':
        $distro = 'Kurumin';
        $informacoes = '- Ano de Criação: 2003 <br> - Característica: Projeto brasileiro conhecido por sua interface amigável e suporte a hardware<br> - Criador: Carlos Morimoto';
        $ultimos .= "Kurumin,";
        break;
      case 'big':
        $distro = 'Big';
        $informacoes = '- Ano de Criação: 2004.<br> - Característica: Enfoque em usabilidade, trazendo uma experiência amigável e pré-configurada.<br> - Criador: Bruno Gonçalves "Morimoto"<br>';
        $ultimos .= "Big,";
        break;
    }
  }
  ?>
  <div class="container">
    <h1>Praticando 3 - Distribuições Linux</h1>
    <hr/>
    <div class="bloco">
      <a href="index.php?clique=ubuntu&ultimos=<?= $ultimos ?>"><img src="https://static.vecteezy.com/system/resources/previews/016/460/827/original/ubuntu-os-logo-top-operating-system-signs-free-png.png" alt="Ubuntu"></a>
      <a href="index.php?clique=arch&ultimos=<?= $ultimos ?>"><img src="https://www.bosontreinamentos.com.br/wp-content/uploads/2017/09/Archlinux-icon-crystal.png" alt="Arch Linux"></a>
      <a href="index.php?clique=kurumin&ultimos=<?= $ultimos ?>"><img src="https://publicdomainvectors.org/tn_img/1457132963.webp" alt="Kurumin"></a>
      <a href="index.php?clique=big&ultimos=<?= $ultimos ?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Logo_Icono.webp/512px-Logo_Icono.webp.png?20221002174205" alt="Big Linux"></a>
    </div>
    <br/>
    <div>
      <?php 
      
      if ($clique):
      ?>
      <p>
        Você clicou no <b><?= $distro ?></b>.
      </p>
      <p>
        <?= $informacoes ?>
      </p>
      <p>
        <a href="index.php">Limpar tudo</a>
      </p>

      <?php
      endif;

      if ($ultimos && (substr_count($ultimos, ',') > 1)):
      ?>

      <?php
      $arrDividido = explode(',', $ultimos);
      $i = 0;
      $cont = substr_count($ultimos, ',');
      $cont -= 1;
      foreach($arrDividido as $strDiv) {
        if ($i < $cont){
          echo '<b>' . $strDiv . '</b><br />';
        }
        $i++;
      }
      endif;
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>