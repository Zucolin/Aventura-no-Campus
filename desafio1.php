


<?php
session_start();
$_SESSION['fase1_ok'] = true;
?>










<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="Caixa-dialogo.css">
	<link rel="stylesheet" href="responsivo.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meu Site</title>
	
	
	<style>
		
		
		
		body {
			margin: 0;
			padding: 0;
			min-height: 100vh;
			background-image: url('img/Quadra2.jpeg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
		.personagem {
			position: absolute;
			top: 40%;
			left: 65%; 
			transform: translate(-50%, -50%);
			width: 100px;
			height: auto;
		transition: transform 0.3s ease; 
        }
		.personagem-vitor {
			position: absolute;
			top: 70%;
			left: 75%; 
			transform: translate(-50%, -50%);
			width: 100px;
			height: auto;
		transition: transform 0.3s ease; 
        }
		
		
		
		
		
		
		.personagem:hover {
			transform: translate(-50%, -50%) scale(1.2);
		}
        
		
			
			
			.btn-escolha {
			display: block;
			width: 80vw;
			max-width: 10000px;
			margin: 20px auto;
			padding: 24px 0;
			font-size: 2em;
			border-radius: 16px;
			border: none;
			color: #fff;
			cursor: pointer;
			transition: background 0.2s;
		}
		.btn-escolha:nth-child(1) { background: #4b90ff; }
		.btn-escolha:nth-child(2) { background: #43c96e; }
		.btn-escolha:nth-child(3) { background: #f7b32b; }
		.btn-escolha:hover { filter: brightness(1.1); }
		
        
        
        </style>





</head>

<body class="pagina-desafio1">
			
	<button id="btn-personagem" class="personagem" style="background: none; border: none; padding: 0; cursor: pointer;">
    <img src="img/Renato.png" alt="Personagem" style="width: 70px; height: auto; display: block;">
</button>


<button id="btn-personagem" class="personagem-vitor" style="background: none; border: none; padding: 0; cursor: pointer;">
    <img src="img/protagonista.png" alt="Personagem" style="width: 60px; height: auto; display: block;">
</button>









<div id="caixa-mensagem" class="mensagem">
	<span class="msg-avatar2"></span>
	<span class="msg-text">RENATO: Preciso da sua ajuda, queremos jogar Handebol... Porém não sabemos direito as regras, pode nos informar?</span>
</div>
		


<div id="escolhas" style="display:none; text-align:center; position:fixed; left:50%; top:50%; transform:translate(-50%,-50%); z-index:101; width:100vw;">
	<button class="btn-escolha" id="btn-certo">7 jogadores, bola sem pé, 3 segundos, 3 passos, sem drible duplo, área 6m só goleiro, gol cruzar linha, faltas empurrar/segurar/bater, punição amarelo/2min/vermelho, 2 tempos 30min.</button>
	<button class="btn-escolha" id="btn-errado1">7 jogadores, pode usar pé, 3 segundos, 3 passos, drible duplo liberado, área 9m só goleiro, gol conta se tocar na trave, faltas apenas empurrar, punição só cartão amarelo, 2 tempos de 20min.</button>
	<button class="btn-escolha" id="btn-errado2">7 jogadores, bola deve ser mordida, 10 segundos, 10 passos, drible com mãos e pés ao mesmo tempo, área 15m qualquer jogador pode entrar, punição inexistente, 2 tempos de 30min.</button>

		<a id="btn-proxima-fase" href="desafio2.php" target="_self" style="display:none; text-decoration:none;">
			<button style="display:block; width: 70vw; max-width: 600px; margin: 40px auto 0 auto; padding: 32px 0; font-size: 2.2em; border-radius: 18px; border: none; background: #1eae60; color: #fff; cursor: pointer;">Ir para a próxima fase</button>
		</a>
	
</div>






<script>
    const btnPersonagem = document.getElementById('btn-personagem');
    const caixaMensagem = document.getElementById('caixa-mensagem');
	btnPersonagem.addEventListener('click', () => {
		caixaMensagem.classList.add('mostrar');
		document.getElementById('escolhas').style.display = 'none';
		setTimeout(() => {
			caixaMensagem.classList.remove('mostrar');
			setTimeout(() => {
				document.getElementById('escolhas').style.display = 'block';
			}, 200); // pequena pausa para transição
		}, 7000); // 7 segundos
	});
		// Exemplo de uso: classificar botões como certo ou errado
		document.getElementById('btn-certo').addEventListener('click', function() {
			// Marca a fase 1 como concluída via PHP
			fetch('set_fase1.php').then(() => {
				alert('Resposta correta!');
				document.getElementById('btn-proxima-fase').style.display = 'block';
			});
		});
		document.getElementById('btn-errado1').addEventListener('click', function() {
			alert('Resposta errada!');
		});
		document.getElementById('btn-errado2').addEventListener('click', function() {
			alert('Resposta errada!');
		});
	</script>
	
    
    
   









</body>
</html>
