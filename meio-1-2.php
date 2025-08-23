<?php

session_start();

if (!isset($_SESSION['permitido2']) || $_SESSION['permitido2'] !== true) {
    // Se não tiver vindo pelo botão certo, volta
    header("Location: dialogoclaudio.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 2</title>
</head>
<body>
   






</body>
</html>





<style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/MEIO.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
        }
        </style>