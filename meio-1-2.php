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
    <link rel="stylesheet" href="Caixa-dialogo.css">
<link rel="stylesheet" href="responsivo.css">

<meta charset="UTF-8">
    <title>Desafio 2</title>
</head>
<body>
   
 <!-- Personagens -->
    <button id="btn-celso" class="personagem-celso" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/Celso.png" alt="Celso" style="width:70px;height:auto;display:block;">
    </button>

    <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>

<!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-celso">
        <span class="msg-avatar3"></span>
        <span class="msg-text">CELSO: Bom Dia pode me ajudar Aqui??</span>
    </div>

    <div id="caixa-mensagem2" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: **Lá vem!!** Quer ajuda com o que?, só falar</span>
    </div>

    <div id="caixa-mensagem3" class="mensagem-celso">
        <span class="msg-avatar3"></span>
        <span class="msg-text">CELSO: Queria um livro Mas não sei onde o deixei, procura pra mim e depois me ajude no laboratorio </span>
    </div>

 <div id="caixa-mensagem4" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Beleza pode deixar! </span>
    </div>

  <!-- Botões de escolha (escondidos inicialmente) -->
    <div id="botoes-escolha" class="botoes-escolhas" style="display:none; text-align:center; margin-top:20px;">
        <button onclick="window.location.href='biblioteca.php'">Ir para a biblioteca</button>
        <button onclick="window.location.href='local2.php'">Ir para o laboratório</button>
        <button onclick="window.location.href='brefeitorio.php'">Ir para o refeitório</button>
    </div>
</div>







<script>
// Mensagens
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');
const msg4 = document.getElementById('caixa-mensagem4');

// Botão Celso
const btnCelso = document.getElementById('btn-celso');

// Botões de escolha
const botoesEscolha = document.getElementById('botoes-escolha');

function mostrarMensagens() {
    msg1.style.display = "flex";
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
                    // Mostra os 3 botões de escolha
                    botoesEscolha.style.display = "block";
                }, 3000); // 3s antes de aparecer os botões

            }, 5000);

        }, 5000);

    }, 5000);
}

// Começa apenas ao clicar no Celso
btnCelso.addEventListener("click", mostrarMensagens);
</script>









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
        
        
        
        
         .personagem-celso,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .personagem-celso {
            top: 30%;
            left: 55%;
        }

        .personagem-vitor {
            top: 20%;
            left: 65%;
        }
         .personagem-celso:hover,
        .personagem-vitor:hover {
            transform: translate(-50%, -50%) scale(1.2);
        }
        
        
        
        
        
.botoes-escolhas button {
    padding: 35px 40px;
    margin: 5px;
    background-color: #1eae60;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 36px;
    transition: transform 0.3s ease,
}

.botoes-escolhas button:hover {
    background-color: #4fc88cff;
    transform: scale(1.1);
}

        
        
        
        
        </style>