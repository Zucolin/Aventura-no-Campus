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
            color: black;
            font-size: 30px;
            cursor: pointer;
        }
	
   
   
   
   
   
   
   
   #msg-secreta {
    display: none;
    position: fixed;      /* Fixa na tela */
    top: 50%;             /* Move para o meio vertical */
    left: 50%;            /* Move para o meio horizontal */
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
   
   
   
   
   
   
   
   
   
   </style>






</head>

<p id="msg-secreta" style="display:none; color:lime; font-weight:bold;">
    🔑 Código secreto ativado!
</p>

<form id="form-secreto" action="passou.php" method="post" style="display:none; position:fixed;">
    <input type="hidden" name="codigo_secreto" value="liberar">
</form>






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
        VITOR: Calma ai Claudio! Eu só estava vendo o horário da aula.
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
        VITOR: Vai me devolver depois meu dispositvo portatil telefone celular?
    </span>
</div>

<!-- Caixa do Claudio -->
<div id="caixa-mensagem5" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: Vá ajudar o Renato que penso no seu caso!!!
    </span>

    <form action="passou.php" method="post">
        <button id="btn-ok" class="btn-ok" name="acesso1" type="submit" value="ok" style="margin-left:16px;">
            OK
        </button>
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
                    }, 4000); // tempo da quarta mensagem
                }, 4000); // tempo da terceira mensagem
            }, 4000); // tempo da segunda mensagem
        }, 4000); // tempo da primeira mensagem
    });

    btnOk.addEventListener('click', () => {
        window.location.href = "proxima_pagina.html"; // muda de página
    });
















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
<?php
	$nivel=1;
?>