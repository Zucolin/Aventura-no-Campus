<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diálogo</title>
    <link rel="stylesheet" href="Caixa-dialogo.css">
    <link rel="stylesheet" href="responsivo.css">
    
    
    <style>
		body {
			margin: 0;
			padding: 0;
			min-height: 100vh;
			background: url('img/entrada.png');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			font-family: Arial, sans-serif;
            image-rendering: pixelated;
        }
        
        
        .personagem-claudio {
            position: absolute;
            top: 35%;
            left: 57%; 
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }
        .personagem-claudio:hover {
            transform: translate(-50%, -50%) scale(1.5);
          }
       .personagem-vitor {
            position: absolute;
            top: 60%;
            left: 70%; 
            transform: translate(-50%, -50%);
            width: 100px;
            cursor: pointer;
       }
        
        

        .btn-ok {
            display: none;
            margin-top: 10px;
            padding: 9px 14px;
            border: none;
            border-radius: 6px;
            background: white;
            color: black;
            font-size: 30px;
            cursor: pointer;
        }
       
        #msg-secreta {
            display: none;
            position: fixed;     
            top: 50%;             
            left: 50%;           
            transform: translate(-50%, -50%); /* Centraliza certinho */
            font-size: 2rem;
            font-weight: bold;
            color: lime;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px 40px;
            border-radius: 15px;
            text-align: center;
            z-index: 2000;        /* Fica acima de tudo */
        }
        
        
         
        
        
        .vinheta {
            width: 1600px;
            height: 800px;
            background: url('sua-imagem.jpg') center/cover no-repeat;
            box-shadow: inset 0 0 300px rgba(0, 0, 0, 0.89);
            position: fixed;
        }
        .tv-falha {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: black;
            mix-blend-mode: screen;
            z-index: 9999;
            pointer-events: none;
            overflow: hidden;
        }

        .tv-falha::before,
        .tv-falha::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0.11) 0px,
            rgba(255,255,255,0.1) 2px,
            transparent 2px,
            transparent 150px
        );
            animation: glitchMove 0.2s infinite;
        }

        .tv-falha::after {
            background: repeating-linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.22) 0px,
            rgba(0, 255, 255, 0.3) 2px,
            transparent 2px,
            transparent 4px
        );
            animation: glitchMove 0.15s infinite reverse;
        }

        @keyframes glitchMove {
            from { transform: translateY(0); }
            to   { transform: translateY(-2px); }
        }

        


        .modmenu {
            position: fixed;       /* fica preso no canto */
            top: 20px;             /* distância do topo */
            left: 20px;           /* distância da direita */
            background: rgba(0, 0, 0, 0.7); /* preto transparente */
            color: white;          /* texto branco */
            font-size: 14px;
            padding: 10px;
            border-radius: 8px;
            min-width: 150px;      /* largura mínima */
            max-width: 250px;      /* largura máxima */
            z-index: 9999;         /* sempre acima */
        }
        .modmenu p {
            margin: 5px 0;        
        }

   </style>


</head>
<body>


<audio id="som-fundo" src="sound/MEDO.mp3" loop autoplay></audio>

<p id="msg-secreta" style="display:none; color:lime; font-weight:bold;">
    🔑 Código secreto ativado!
</p>

<form id="form-secreto" action="passou.php" method="post" style="display:none; position:fixed;">
    <input type="hidden" name="codigo_secreto" value="liberar">
</form>


<!-- visuais -->
<div class="tv-falha"></div>
<div class="vinheta">
  <p style="color:white; font-size:24px;"></p>
</div>

<div class="modmenu">
  <p>⚙️ OBJETIVOS</p>
 
</div>


<!-- Personagem -->
<button id="btn-personagem" class="personagem-claudio" style="background: none; border: none; padding: 0;">
        <img src="img/claudio.png" alt="Personagem" style="width: 100px; height: auto; display: block;">
    </button>

<button id="btn-personagem2" class="personagem-vitor" style="background: none; border: none; padding: 0;">
        <img src="img/protagonista.png" alt="Personagem" style="width: 80px; height: auto; display: block;">
    </button>

   
   
  <!-- Caixa do Claudio -->
<div id="caixa-mensagem1" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Harammm te peguei, inferior, mexendo no celular? Me entregue isso agora!!!
    </span>
</div>

<!-- Caixa do Vitor -->
<div id="caixa-mensagem2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Calma aí Claudio! Eu só estava vendo o horário da aula.
    </span>
</div>

<!-- Caixa do Claudio -->
<div id="caixa-mensagem3" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Blhá Blhá Blhá. Me entregue agora!!!
    </span>
</div>

<!-- Caixa do Vitor -->
<div id="caixa-mensagem4" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Vai me devolver o celular depois?
    </span>
</div>

<!-- Caixa do Claudio -->
<div id="caixa-mensagem5" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Vá ajudar o Renato que eu penso no seu caso!!!
    </span>


    <form action="passou.php" method="post">
       <a href="desafio1.php"> <button id="btn-ok" class="btn-ok" name="acesso1" type="submit" value="ok1" style="margin-left:16px;">
            OK
        </button> <a>
    </form>
</div>



   
<script>

    const msg = document.getElementById('caixa-mensagem');
    const btnPersonagem = document.getElementById('btn-personagem');
    const msg1 = document.getElementById('caixa-mensagem1');
    const msg2 = document.getElementById('caixa-mensagem2');
    const msg3 = document.getElementById('caixa-mensagem3');
    const msg4 = document.getElementById('caixa-mensagem4');
    const msg5 = document.getElementById('caixa-mensagem5');
    const btnOk = document.getElementById('btn-ok');

    btnPersonagem.addEventListener('click', () => {
        msg1.classList.add('mostrar'); // mostra a primeira
        setTimeout(() => {
            msg1.classList.remove('mostrar');
            msg2.classList.add('mostrar'); // mostra a segunda
            setTimeout(() => {
                msg2.classList.remove('mostrar');
                msg3.classList.add('mostrar'); // mostra a terceira
                setTimeout(() => {
                    msg3.classList.remove('mostrar');
                    msg4.classList.add('mostrar'); // mostra a quarta
                    setTimeout(() => {
                        msg4.classList.remove('mostrar');
                        msg5.classList.add('mostrar'); // mostra a quinta
                        setTimeout(() => {
                            btnOk.style.display = "inline-block"; // aparece no fim
                        }, 2000); // espera antes do botão aparecer
                    }, 5000); // tempo da quarta mensagem
                }, 5000); // tempo da terceira mensagem
            }, 5000); // tempo da segunda mensagem
        }, 5000); // tempo da primeira mensagem
    });

    btnOk.addEventListener('click', () => {
        window.location.href = "proxima_pagina.html"; // muda de página
    });



/* Codigo -P- */

let ultimaTecla = 0;

document.addEventListener("keydown", function(event) {
    if (event.key.toLowerCase() === "p") {
        let agora = Date.now();
        if (agora - ultimaTecla < 500) { 
            // Mostra mensagem secreta
            let msg = document.getElementById("msg-secreta");
            msg.style.display = "block";

            // Depois de 2s envia o form automaticamente
            setTimeout(() => {
                document.getElementById("form-secreto").submit();
            }, 2000);
        }
        ultimaTecla = agora;
    }
});


</script>


</body>
</html>
