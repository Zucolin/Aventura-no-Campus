<?php

session_start();

if (!isset($_SESSION['permitido8']) || $_SESSION['permitido8'] !== true) {
    // Se não tiver vindo pelo botão certo, volta
    header("Location: dialogoclaudio.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="Caixa-dialogo.css">
<link rel="stylesheet" href="responsivo.css">
   


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:80px;height:auto;display:block;">
    </button>


 <button id="btn-senha" class="senha" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/senha.png" alt="senha" style="width:130px;height:auto;display:block;">
    </button>

 <button id="btn-cofre" class="cofre" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/cofre.png" alt="cofre" style="width: 160px;px;height:auto;display:block;">
    </button>



<!-- Caixa do Vitor -->
<div id="caixa-mensagem1" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **vou pegar o que é meu, agora**
    </span>
</div>

<div id="caixa-mensagem2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Vamos dar uma olhada em tudo aqui**
    </span>
</div>


<div id="caixa-senha1" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Interessante.. deve ser a senha do cofre, parece faltar dois números**
    </span>
</div>

<div id="caixa-senha2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Só de bater o olho percebo ter uma sequencia logica de numeros aqui**
    </span>
</div>

<div id="caixa-senha3" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Só me resta tentar descobrir isso, diria que deve ter uma mistura de "P.G" e de "P.A"**
    </span>
</div>



<div id="caixa-cofre" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Nossa um cofre!!, Meu  celular deve estar aqui dentro**
    </span>
</div>


<script> 

const btnsenha = document.getElementById('btn-vitor');
const btncofre = document.getElementById('btn-cofre');

const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');


const msg3 = document.getElementById('caixa-cofre');


const msg4 = document.getElementById('caixa-senha1');
const msg5 = document.getElementById('caixa-senha2');
const msg6 = document.getElementById('caixa-senha3');

const btnProxima = document.getElementById('btn-ok');



function mostrarMensagens() {
    msg1.style.display = "flex"; // mostra a primeira
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.style.display = "none"; // esconde a primeira
        msg2.style.display = "flex"; // mostra a segunda
        msg2.classList.add('mostrar');
    }, 4000); // tempo que a primeira fica visível (4 segundos)
}


document.addEventListener('DOMContentLoaded', function() {
    mostrarMensagens(); // chama sua função sem precisar clicar
});






















function mostrarMensagens() {
    msg1.style.display = "flex";
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.classList.remove('mostrar');
        msg1.style.display = "none";

        msg2.style.display = "flex";
        msg2.classList.add('mostrar');

        setTimeout(() => {
            msg2.classList.remove('mostrar');
            msg2.style.display = "none";

            msg3.style.display = "flex";
            msg3.classList.add('mostrar');

            setTimeout(() => {
                msg3.classList.remove('mostrar');
                msg3.style.display = "none";

                msg4.style.display = "flex";
                msg4.classList.add('mostrar');

                btnProxima.style.display = "block";
               

                
                   // Aqui você pode adicionar o que deve acontecer após a última mensagem
               }, 5000);
           }, 5000);
       }, 5000);
    }














</script>


</body>
</html>

<style>
  
  
  body {
         margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/sala.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
            image-rendering: crisp-edges;
            image-rendering: crisp-edges;
  }



        .personagem-vitor,
        .senha,
        .cofre {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 150px;
            height: auto;
            transition: transform 0.3s ease;

        }
        

        .personagem-vitor {
            top: 45%;
            left: 30%;
        }

        .senha {
            top: 45%;
            left: 70%;
        }

        .cofre {
            top: 8%;
            left: 50%;
        }

        .cofre:hover {
            transform: translate(-50%, -50%) scale(1.4);
        }
        .senha:hover{
            transform: translate(-50%, -50%) scale(4.5);
        }
</style>