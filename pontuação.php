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
            background: linear-gradient(135deg, #ff0080, #7928ca, #2af598);
      background-size: 300% 300%;
      animation: fundo 8s infinite alternate;
            color: #fbf8f8ff;
            margin: 0;
        }

         @keyframes fundo {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }


        .card {
            background: rgba(246, 246, 246, 0.3);
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
            color: #ffffffff;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            padding: 12px 24px;
            background: #d61111ff;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            border-radius: 10px;
            transition: background 0.3s;
        }
        a:hover {
            background: #148c4a;
        }
        
        
        /* Confetes animados */
    .confete {
      position: fixed;
      width: 10px;
      height: 10px;
      background: #fff;
      opacity: 0.7;
      border-radius: 50%;
      animation: cair 5s linear infinite;
    }

    @keyframes cair {
      from { transform: translateY(-100vh) rotate(0deg); }
      to { transform: translateY(100vh) rotate(360deg); }
    }
   </style>

  <script>
    // Gera confetes aleatórios
    for (let i = 0; i < 100; i++) {
      const confete = document.createElement('div');
      confete.classList.add('confete');
      confete.style.left = Math.random() * 100 + "vw";
      confete.style.background = `hsl(${Math.random()*360}, 100%, 50%)`;
      confete.style.animationDuration = (3 + Math.random() * 5) + "s";
      document.body.appendChild(confete);
    }
  </script>
  



</head>
<body>
    <div class="card">
        <h1>Sua Pontuação</h1>
        <div class="pontos">
            <?php echo $_SESSION['pontos']; ?> pts
        </div>
        <a href="index.html">Voltar ao jogo</a>
    </div>




<script>
    // Gera confetes aleatórios
    for (let i = 0; i < 100; i++) {
      const confete = document.createElement('div');
      confete.classList.add('confete');
      confete.style.left = Math.random() * 100 + "vw";
      confete.style.background = `hsl(${Math.random()*360}, 100%, 50%)`;
      confete.style.animationDuration = (3 + Math.random() * 5) + "s";
      document.body.appendChild(confete);
    }
  </script>



</body>
</html>
