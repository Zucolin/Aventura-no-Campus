<?php
session_start();

// garante que existe a variável de pontos
if (!isset($_SESSION['pontos'])) {
    $_SESSION['pontos'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Pontuação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4b90ff, #43c96e);
            color: #fff;
            margin: 0;
        }
        .card {
            background: rgba(0,0,0,0.3);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            max-width: 400px;
            width: 90%;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .pontos {
            font-size: 50px;
            font-weight: bold;
            color: #f7b32b;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            padding: 12px 24px;
            background: #1eae60;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            border-radius: 10px;
            transition: background 0.3s;
        }
        a:hover {
            background: #148c4a;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Sua Pontuação</h1>
        <div class="pontos">
            <?php echo $_SESSION['pontos']; ?> pts
        </div>
        <a href="desafio1.php">Voltar ao jogo</a>
    </div>
</body>
</html>
