<?php
session_start();
if (!isset($_SESSION['permitido6']) || $_SESSION['permitido6'] !== true) {
    header("Location: dialogoclaudio.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livro Misterioso</title>
  <link rel="stylesheet" href="Caixa-dialogo.css">
  <link rel="stylesheet" href="responsivo.css">
  
  
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      overflow: hidden;
      background-image: url('img/lie.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      image-rendering: pixelated;
    }

    /* Personagens */
    .personagem-fabio,
    .personagem-vitor {
      position: absolute;
      transform: translate(-50%, -50%);
      transition: transform 0.3s ease;
      background: none;
      border: none;
    }
    .personagem-fabio {
      top: 35%;
      left: 70%;
      width: 140px;
    }
    .personagem-vitor {
      top: 55%;
      left: 78%;
      width: 70px;
    }
    .personagem-fabio:hover {
      transform: translate(-50%, -50%) scale(1.4);
    }

   
   
   
   
   .fundo-imagem {
     width: 100%;
    height: 850px; /* aumenta a altura da div */
    background-image: url('img/computador.png'); /* coloque o caminho da sua imagem */
    background-size: cover;   /* cobre toda a div, mas pode cortar a imagem */
    background-position: center;
    background-repeat: no-repeat;
   
}
   
   
   
   
   
   
   
   
   
   
   
   
   
    /* Botão do livro */
    .livro-misterio {
      position: fixed;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      background: none;
      border: none;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .livro-misterio:hover {
      transform: translate(-50%, -50%) scale(1.3);
    }

    /* Fundo escuro do popup */
    .popup-livro {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(255, 255, 255, 0.7);
      z-index: 9999;
    }

    /* Caixa centralizada */
    .popup-conteudo {
      position: absolute;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
      border-radius: 12px;
      max-width: 90%;
      max-height: 90%;
      box-sizing: border-box;
      text-align: center;
    }

    .popup-conteudo img {
      max-width: 100%;
      max-height: 80vh;
      border-radius: 8px;
    }

    .fechar {
      position: absolute;
      top: 10px; right: 15px;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      cursor: pointer;
    }

    .fechar:hover {
      color: red;
    }
  </style>


</head>
<body>

<div style="background:none; color: white; width:100px; height:100px; border-radius:8px; 
            position:absolute; top:85%; left:50.4%; transform:translate(-50%,-50%);">
<p><STRONG>INVENTARIO</STRONG></p>
</div>

<div style="background:white; width:100px; height:100px; border-radius:8px; 
            position:absolute; top:90%; left:50.4%; transform:translate(-50%,-50%);">
</div>


<!-- Botão do livro -->
  <button id="btn-livro-misterio" class="livro-misterio">
    <img src="img/livro-qr.png" alt="Livro misterioso" style="width:100%;">
  </button>

  <!-- Popup -->
  <div id="popup-livro" class="popup-livro">
    <div class="popup-conteudo">
      <span id="fechar-popup" class="fechar">&times;</span>
      <img src="img/livro-qr2.png" alt="Livro aberto">
    </div>
  </div>

 
 
 


  <!-- Personagens -->
  <button id="btn-fabio" class="personagem-fabio">
    <img src="img/fabio.png" alt="Fabio" style="width:100%;">
  </button>

  <button id="btn-vitor" class="personagem-vitor">
    <img src="img/protagonista.png" alt="Vitor" style="width:100%;">
  </button>

  <!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO: Eae Vitor, to com problema urgente aqui, mecheram no meu computador ai</span>
    </div>

     <div id="caixa-mensagem2" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO:  Suspeito terem usado uma linguagem de simbolos já existente, agora para eu poder mecher, tenho que saber essa linguagem</span>
    </div>
    
    <div id="caixa-mensagem3" class="mensagem-fabio">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Beleza deixa eu ver um negocio aqui <br>       ** ABRA O INVENTARIO **</span>
    </div>

    <div id="caixa-mensagem4" class="mensagem-fabio">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Que conhecidencia incrivel.. conhecidencia de jogo isso!!! O livro que achei tem envolvimento com seu computador </span>
    </div>

    <div id="caixa-mensagem5" class="mensagem-fabio">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Hhummmm.. Vamos dar uma olhada nisso!!  </span>
    </div>

    <div  class="fundo-imagem"></div>

    <input type="text" style="background:none; color: white; width:100px; height:100px; border-radius:8px; 
            position:absolute; top:85%; left:50.4%; transform:translate(-50%,-50%);">
  
  
  
  
  
  
  
  
  
  
  
  
  
  <script>
    const btnfabio = document.getElementById('btn-fabio');
    const btnLivro = document.getElementById("btn-livro-misterio");
    const popup = document.getElementById("popup-livro");
    const fechar = document.getElementById("fechar-popup");
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');
const msg4 = document.getElementById('caixa-mensagem4');
const msg5 = document.getElementById('caixa-mensagem5');
  

    btnLivro.addEventListener("click", () => {
      popup.style.display = "block";
    });

    fechar.addEventListener("click", () => {
      popup.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === popup) {
        popup.style.display = "none";
      }
    });
  
  
  
  
 function mostrarMensagens() {
    msg1.style.display = "flex"; // mostra a primeira
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.style.display = "none";
        msg2.style.display = "flex";
        msg2.classList.add('mostrar');

        setTimeout(() => {
            msg2.style.display = "none";
            msg3.style.display = "flex";
            msg3.classList.add('mostrar');
            setTimeout(() => {
                msg3.style.display = "none";
                msg4.style.display = "flex";
                msg4.classList.add('mostrar');
         setTimeout(() => {
                      msg4.style.display = "none";
                      msg5.style.display = "flex";
                      msg5.classList.add('mostrar');
                setTimeout(() => {
                      
            },           5000); // tempo da terceira mensagem
                    },10000);
                },5000);
        }, 5000); // tempo da segunda mensagem

    }, 5000); // tempo da primeira mensagem
}

// Ativa a sequência ao clicar no Fabio
btnfabio.addEventListener('click', mostrarMensagens);
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </script>

</body>
</html>
