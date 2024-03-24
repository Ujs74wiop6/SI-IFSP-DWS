<?php
require '../vendor/autoload.php';

$parsedown = new Parsedown();

$markdownContent = file_get_contents($_GET['file']);
$htmlContent = $parsedown->text($markdownContent);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.6;
    }
        
    h1, h2, h3 {
        color: #333;
    }

    a {
        color: #0077cc;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    pre {
        background-color: #f4f4f4;
        padding: 10px;
        overflow-x: auto;
        border-radius: 5px;
    }

    code {
        background-color: #f4f4f4;
        padding: 2px 5px;
        border-radius: 3px;
    }
    </style>
<body>

<?php echo $htmlContent; ?>

</body>
</html>
