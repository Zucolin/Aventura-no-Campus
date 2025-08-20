<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Caixa-dialogo.css">
</head>
<body>
    


<button id="btn-personagem" class="personagem" style="background: none; border: none; padding: 0; cursor: pointer;">
    <img src="img/claudio.png.png" alt="Personagem" style="width: 100px; height: auto; display: block;">
</button>

<button id="btn-personagem" class="personagem1" style="background: none; border: none; padding: 0; cursor: pointer;">
    <img src="img/vitor.png" alt="Personagem" style="width: 80px; height: auto; display: block;">
</button>




<div id="caixa-mensagem" class="mensagem">
    <span class="msg-avatar1"></span>
    <span class="msg-text">CLAUDIO: Harammm te peguei inferior, mecehendo no celular? me entregue isso agora!!!</span>
</div>

<div id="caixa-mensagem2" class="mensagem" style="visibility:hidden">
    <span class="msg-avatar" style="background-image: url('img/vitor.png');"></span>
    <span class="msg-text">VITOR: Calma, professor! Eu só estava vendo o horário da aula.</span>
</div>






<script>
	const btnPersonagem = document.getElementById('btn-personagem');
	const caixaMensagem = document.getElementById('caixa-mensagem');
	btnPersonagem.addEventListener('click', () => {
		caixaMensagem.classList.add('mostrar');
		setTimeout(() => {
			caixaMensagem.classList.remove('mostrar');
		}, 7000); // 7 segundos igual ao desafio 1
	});
    
    
    
    
    
    
    </script>

</body>
</html>



























<style>


		
		
		body {
			margin: 0;
			padding: 0;
			min-height: 100vh;
			background: url('img/entrada.png');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
            .personagem {
                position: absolute;
                top: 35%;
                left: 57%; 
                transform: translate(-50%, -50%);
                width: 100px;
                height: auto;
            transition: transform 0.3s ease; 
            }

          .personagem1 {
                position: absolute;
                top: 60%;
                left: 70%; 
                transform: translate(-50%, -50%);
                width: 100px;
                height: auto;
            transition: transform 0.3s ease; 
            }
        .personagem1 img {
    transform: scaleX(-1);
}
        .personagem:hover {
			transform: translate(-50%, -50%) scale(1.2);
		}

        </style>