<?php
require_once("passou.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pontuação</title>
  <link rel="stylesheet" href="responsivo.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap');
    :root{
      --red-1: #0b0002;
      --red-2: #250007;
      --red-3: #5a0010;
      --accent: #ff2e2e;
      --glass-bg: rgba(160,160,160,0.14);
      --glass-brd: rgba(255,255,255,0.18);
      --glass-shadow: 0 20px 60px rgba(0,0,0,0.55), inset 0 0 0 1px rgba(255,255,255,0.05);
      --radius: 28px;
    }

    *{ box-sizing: border-box; }
    html, body{ height: 100%; margin: 0; }
    body{
      color: #f4f4f4;
      overflow: hidden;
      font-family: system-ui, sans-serif;
      background: #000;
    }

    .bg,
    .bg::before,
    .bg::after{
      position: fixed;
      inset: 0;
      z-index: -3;
      content: "";
      pointer-events: none;
    }

    .bg{
      background:
        radial-gradient(1200px 800px at 20% 30%, rgba(255,40,40,0.13), transparent 60%),
        radial-gradient(1000px 700px at 80% 70%, rgba(255,60,60,0.10), transparent 55%),
        linear-gradient(120deg, var(--red-1), var(--red-2) 45%, var(--red-3) 120%);
      animation: hueShift 20s linear infinite;
    }

    .bg::before{
      z-index: -2;
      background:
        radial-gradient(65% 55% at 30% 40%, rgba(255,30,30,0.18), transparent 60%),
        radial-gradient(55% 50% at 75% 60%, rgba(255,30,30,0.12), transparent 65%);
      transform-origin: 50% 50%;
      animation: swirl 50s linear infinite;
      mix-blend-mode: screen;
    }

    .bg::after{
      z-index: -1;
      background-size: 260px 260px;
      animation: noiseMove 6s steps(60) infinite;
      opacity: 0.35;
      mix-blend-mode: overlay;
    }

    @keyframes hueShift{
      0%   { filter: hue-rotate(0deg) saturate(1.0); }
      50%  { filter: hue-rotate(-6deg) saturate(1.05); }
      100% { filter: hue-rotate(0deg) saturate(1.0); }
    }
    @keyframes swirl{ from{ transform: rotate(0deg) scale(1); } to{ transform: rotate(360deg) scale(1); } }
    @keyframes noiseMove{ to{ background-position: 100% 100%; } }

    .wrap{
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 20px;
    }

    .card{
      width: 80%;
      height: 70%;
      background: var(--glass-bg);
      border: 1px solid var(--glass-brd);
      border-radius: var(--radius);
      box-shadow: var(--glass-shadow);
      backdrop-filter: blur(10px) saturate(1.05);
      -webkit-backdrop-filter: blur(10px) saturate(1.05);
      display: grid;
      grid-template-rows: auto 1fr auto;
      gap: 20px;
      padding: 30px;
      position: relative;
      overflow: hidden;
    }

    h1{
      font-family: "Orbitron", sans-serif;
      font-size: 4rem;
      margin: 0;
      text-shadow: 0 6px 24px rgba(0,0,0,0.5);
    }

    .content{
      display: grid;
      place-items: center;
      text-align: center;
    }

    p{
      font-family: "Pixelify Sans", sans-serif;
      font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
      font-size: 2rem;
      line-height: 1.9;
      max-width: 70ch;
      margin: 0 auto;
    }

    .score{
      font-family: "Orbitron", system-ui, sans-serif;
      font-weight: 800;
      font-size: 7rem;
      margin: 20px 0;
      color: #a50e0eff;
    }

    strong{
    font-family: "Orbitron", system-ui, sans-serif;
      color: var(--accent);
      font-weight: 900;
    }
  </style>
</head>
<body class="pagina-final">
  <div class="bg"></div>

  <main class="wrap">
    <section class="card">
      <h1>Pontuação</h1>
      <div class="content">
        <div class="score"><?=$_SESSION['pontos']?></div>
        <p>
          Sua pontuação foi de <strong><?=$_SESSION['pontos']?></strong> pontos. Seu tempo foi de <strong><?=$tempo_decorrido?></strong>!
        </p>
      </div>
    </section>
  </main>
</body>
</html>
