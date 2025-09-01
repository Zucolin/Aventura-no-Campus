<?php
session_start();
$pontuacao = $_SESSION['pontuacao'] ?? 0;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pontuação</title>
</head>
<body>
    <h1>Sua pontuação atual: <?php echo $pontuacao; ?></h1>

    <a href="index.php">Voltar</a> <!-- ou outra página do seu jogo -->
</body>
</html>
