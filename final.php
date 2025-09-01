<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parabéns!</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #ff0080, #7928ca, #2af598);
      background-size: 300% 300%;
      animation: fundo 8s infinite alternate;
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
    }

    @keyframes fundo {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }

    h1 {
      font-size: 6em;
      color: #fff;
      text-transform: uppercase;
      text-shadow: 0 0 10px #fff, 
                   0 0 20px #ff00de, 
                   0 0 40px #ff00de, 
                   0 0 80px #ff00de;
      animation: pulsar 2s infinite alternate;
    }

    @keyframes pulsar {
      from {
        transform: scale(1);
        text-shadow: 0 0 10px #fff,
                     0 0 20px #ff00de,
                     0 0 40px #ff00de,
                     0 0 80px #ff00de;
      }
      to {
        transform: scale(1.1);
        text-shadow: 0 0 20px #fff,
                     0 0 40px #00ffe7,
                     0 0 80px #00ffe7,
                     0 0 120px #00ffe7;
      }
    }

    /* Confetes animados */
    .confete {
      position: absolute;
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
</head>
<body>
  <h1>🎉 PARABÉNS! 🎉</h1>

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
