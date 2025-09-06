<?php
session_start();

if (!isset($_SESSION['permitido3']) || $_SESSION['permitido3'] !== true) {
    header("Location: dialogoclaudio.php");
    exit;
}

$_SESSION['passou_biblioteca'] = true;


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

<form  method="post" action="passou.php">
    <input type="hidden" name="acao" value="ganhar">
<a id="voltar" href="meio-1.php" class="btn-voltar">← Voltar</a>

</form>


<audio id="som-fundo" src="sound/CON" loop autoplay></audio>




<div class="modmenu">
  <p>⚙️ OBJETIVOS/SPOLIER</p>
  <br>
  <p><br>Pegar o  Celular</p>
 <p><br> Achar livro do Celso</p>
 <p><br> Ir ao Laboratorio</p>
  
</div>



<!-- Personagens -->
 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:80px;height:auto;display:block;">
    </button>

    <button id="btn-juliana" class="personagem-juliana" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/juliana.png" alt="Juliana" style="width:130px;height:auto;display:block;">
    </button>

 <button id="btn-livro-misterio" class="livro-misterio" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/livro-qr.png" alt="Livro-misterioso" style="width:30px; ">
    </button>


<!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-juliana">
        <span class="msg-avatar4"></span>
        <span class="msg-text">JULIANA: Oi veio ler?</span>
    </div>

    <div id="caixa-mensagem2" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Não, vim procurar pelo livro do Celso</span>
    </div>

    <div id="caixa-mensagem3" class="mensagem-juliana">
        <span class="msg-avatar4"></span>
        <span class="msg-text">JULIANA: Tudo bem. Procure passando o Mouse pelas prateleiras </span>
    </div>



<!--  mensagem do livro    -->


     <div id="caixa-mensagem4" class="mensagem-juliana">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR:   Que livro foi esse que achei?</span>
    </div>

    <div id="caixa-mensagem5" class="mensagem-vitor">
        <div class="msg-avatar4"></div>
        <span class="msg-text">JULIANA:  Nossa que estranho, nunca tinha visto esse livro por aqui!!</span>
    </div>

    <div id="caixa-mensagem6" class="mensagem-renato">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Vou aproveitar e levar!! </span>
    </div>

<div id="caixa-mensagem7" class="mensagem-livro-misterio">
        <span class="msg-avatar-misterio"></span>
        <span class="msg-livro-misterio">     <STRONG>      LIVRO MISTERIOSO   </STRONG></span>
    </div>












 <script>
        
const btnJuliana = document.getElementById('btn-juliana');
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');


btnJuliana.addEventListener('click', () => {
    // Mostra a primeira
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.classList.remove('mostrar');
        msg2.classList.add('mostrar');

        setTimeout(() => {
            msg2.classList.remove('mostrar');
            msg3.classList.add('mostrar');
       setTimeout(() => {
                msg3.classList.remove('mostrar');
            }, 8000); // tempo da terceira mensagem
       
        }, 6000); // tempo da segunda mensagem

    }, 5000); // tempo da primeira mensagem
});


const btnLivro = document.getElementById('btn-livro-misterio');
const msg7 = document.getElementById('caixa-mensagem7'); // nova
const msg4 = document.getElementById('caixa-mensagem4');
const msg5 = document.getElementById('caixa-mensagem5');
const msg6 = document.getElementById('caixa-mensagem6');
const vlt = document.getElementById('voltar');

btnLivro.addEventListener('click', () => {
    // Mostra a msg7 primeiro
    msg7.classList.add('mostrar');

    setTimeout(() => {
        msg7.classList.remove('mostrar');
        msg4.classList.add('mostrar');

        setTimeout(() => {
            msg4.classList.remove('mostrar');
            msg5.classList.add('mostrar');

            setTimeout(() => {
                msg5.classList.remove('mostrar');
                msg6.classList.add('mostrar');

                setTimeout(() => {
                    msg6.classList.remove('mostrar');
                vlt.style.display = 'inline-block';

                }, 6000); // tempo da última msg
            }, 6000); // msg5

        }, 7000); // msg4

    }, 5000); // msg7
});

 </script>










</body>
</html>





<style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/biblioteca.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
        }


       
       
        .livro-misterio{
            position: fixed;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
            opacity: 10%;
        }

        .livro-misterio {
            top: 55%;
            left: 62%;
        }
       
       .livro-misterio:hover {
            transform: translate(-50%, -50%) scale(10.3);
            opacity: 100%;
       }
       
       
       
       
       
       .personagem-juliana,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 150px;
            height: auto;
            transition: transform 0.3s ease;
        }
        .personagem-juliana {
            top: 40%;
            left: 25%;
            transform: scaleX(1);
            transition: transform 0.3s ease;
        }
        .personagem-vitor {
            top: 65%;
            left: 15%;
        }
        .personagem-juliana:hover{
            transform: scale(1.4) scaleX(-1);
        }
       
       
       
       
       .btn-voltar {
    display: none;
    padding: 15px 25px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    font-size: 16px;
    border-radius: 8px;
    transition: 0.3s;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

        .btn-voltar:hover {
            background-color: #2980b9;
       }








     .modmenu {
  position: fixed;       /* fica preso no canto */
  top: 20px;             /* distância do topo */
  left: 20px;           /* distância da esquerda */
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
  margin: 2px 0;         /* espaço entre as linhas */
}
      
      </style>