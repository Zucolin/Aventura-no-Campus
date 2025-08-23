<?php

session_start();

if (!isset($_SESSION['permitido']) || $_SESSION['permitido'] !== true) {
    header("Location: dialogoclaudio.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="responsivo.css">
</head>
<body class="pagina-desafio2">
    <h1 style="color: #1eae60; font-size: 3em; text-align: center; margin-top: 20vh;">Passou de fase!</h1>
</body>
</html>