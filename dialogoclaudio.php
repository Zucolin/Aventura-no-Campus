<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diálogo</title>
    <link rel="stylesheet" href="Caixa-dialogo.css">
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
		}
        .personagem {
            position: absolute;
            top: 35%;
            left: 57%; 
            transform: translate(-50%, -50%);
            width: 100px;
            cursor: pointer;
            transition: transform 0.3s ease; 
        }
        .personagem1 {
            position: absolute;
            top: 60%;
            left: 70%; 
            transform: translate(-50%, -50%);
            width: 100px;
            cursor: pointer;
            transition: transform 0.3s ease; 
        }
        .personagem1 img {
            transform: scaleX(-1);
        }
        .personagem:hover {
			transform: translate(-50%, -50%) scale(1.2);
		}
        .mensagem.mostrar {
            display: block;
        }

        .btn-ok {
            display: none;
            margin-top: 10px;
            padding: 6px 14px;
            border: none;
            border-radius: 6px;
            background: black;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
	</style>
</head>
<body>
    
    <button id="btn-personagem" class="personagem" style="background: none; border: none; padding: 0;">
        <img src="img/claudio.png" alt="Personagem" style="width: 100px; height: auto; display: block;">
    </button>

    <button id="btn-personagem2" class="personagem1" style="background: none; border: none; padding: 0;">
        <img src="img/protagonista.png" alt="Personagem" style="width: 80px; height: auto; display: block;">
    </button>

    <!-- Caixas de mensagem -->
    <div id="caixa-mensagem1" class="mensagem">
        <span class="msg-avatar1"></span>
        CLAUDIO: Harammm te peguei inferior, mexendo no celular? Me entregue isso agora!!!
    </div>

    <div id="caixa-mensagem2" class="mensagem">
        <span class="msg-avatar2"></span>
        VITOR: Calma, professor! Eu só estava vendo o horário da aula.
        <br>
        <button id="btn-ok" class="btn-ok"><a href="desafio1.php">OK</a></button>
    </div>

    <script>
        const btnPersonagem = document.getElementById('btn-personagem');
        const msg1 = document.getElementById('caixa-mensagem1');
        const msg2 = document.getElementById('caixa-mensagem2');
        const btnOk = document.getElementById('btn-ok');

        btnPersonagem.addEventListener('click', () => {
            msg1.classList.add('mostrar'); // mostra a primeira
            setTimeout(() => {
                msg1.classList.remove('mostrar');
                msg2.classList.add('mostrar'); // mostra a segunda
                setTimeout(() => {
                    btnOk.style.display = "inline-block"; // só aparece no fim dentro da caixa
                }, 2000); // espera 2s antes de mostrar o botão OK
            }, 4000); // tempo da primeira mensagem
        });

        btnOk.addEventListener('click', () => {
            window.location.href = "proxima_pagina.html"; // muda de página
        });
    </script>
</body>
</html>
<?php
	$nivel=1;
?>