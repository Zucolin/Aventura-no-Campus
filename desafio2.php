<?php
session_start();
// Verifica se a fase 1 foi concluída
if (!isset($_SESSION['fase1_ok']) || $_SESSION['fase1_ok'] !== true) {
    // Redireciona para a primeira fase se tentar pular
    header('Location: desafio1.html');
    exit();
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