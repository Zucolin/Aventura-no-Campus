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
              transform: translate(-50%, -50%) scale(1.3);
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
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
	
    </style>






</head>
<body class="pagina-dialogoclaudio">
    
    <button id="btn-personagem" class="personagem-claudio" style="background: none; border: none; padding: 0;">
        <img src="img/claudio.png" alt="Personagem" style="width: 100px; height: auto; display: block;">
    </button>

    <button id="btn-personagem2" class="personagem-vitor" style="background: none; border: none; padding: 0;">
        <img src="img/protagonista.png" alt="Personagem" style="width: 80px; height: auto; display: block;">
    </button>

   
   
   <DIV>  <!-- Caixa do Claudio -->
   
   <!-- Caixa do Claudio -->
<div id="caixa-mensagem1" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Harammm te peguei, inferior, mexendo no celular? Me entregue isso agora!!!
    </span>
</div>

<!-- Caixa do Protagonista -->
<div id="caixa-mensagem2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Calma cacete! Eu só estava vendo o horário da aula.
    </span>
   
      <!-- Caixa do Claudio -->
<div id="caixa-mensagem3" class="mensagem-claudio1">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Blhá Blhá Blhá. Me entregue agora!!!
    </span>

      <!-- Caixa do Claudio -->
<div id="caixa-mensagem4" class="mensagem-vitor1">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Vai me devolver depois meu dispositvo portatil telefone celular?
    </span>

     <!-- Caixa do Claudio -->
<div id="caixa-mensagem5" class="mensagem-claudio2">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Vá ajudar o Renato que penso no seu caso!!!
    </span>
   
   
    <button id="btn-ok" class="btn-ok" style="margin-left:16px;">
        <a href="desafio1.php">OK</a>
    </button>
</div>

   
   </DIV>
   
   
   
   
   
   
<script>
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
                    }, 4000); // tempo da quarta mensagem
                }, 4000); // tempo da terceira mensagem
            }, 4000); // tempo da segunda mensagem
        }, 4000); // tempo da primeira mensagem
    });

    btnOk.addEventListener('click', () => {
        window.location.href = "proxima_pagina.html"; // muda de página
    });
</script>


    </script>
</body>
</html>
<?php
	$nivel=1;
?>