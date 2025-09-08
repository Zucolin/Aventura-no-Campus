<?php

session_start();

if (!isset($_SESSION['permitido7']) || $_SESSION['permitido7'] !== true) {
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
    
    <!-- Personagens -->
    <button id="btn-personagem" class="personagem-claudio" style="background: none; border: none; padding: 0;">
        <img src="img/claudio.png" alt="Personagem" style="width: 100px; height: auto; display: block;">
    </button>

 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>




<!-- Caixa do Vitor -->
<div id="caixa-mensagem1" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Eae Claudio ajudei os professores até fora do horario de aula, me devolve meu celular?
    </span>
</div>

<!-- Caixa do Claudio -->
<div id="caixa-mensagem2" class="mensagem-claudio">
    <span class="msg-avatar1"></span>
    <span class="msg-text">
        CLAUDIO: hahahaha engraçado né, vou entregar sim... Na mão dos seus País
    </span>
</div>

<!-- Caixa do Vitor -->
<div id="caixa-mensagem3" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Nem a pau que ele vai fazer isso**
    </span>
</div>

<!-- Caixa do Vitor -->
<div id="caixa-mensagem4" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: Tentei ir pro lado bom Claudio!!
    </span>


    <form action="passou.php" method="post">
        <input type="hidden" name="acao" value="ganhar">
        <button id="btn-ok" class="btn-ok" name="acesso8" type="submit" value="ok8" style="margin-left:16px;">
            OK
        </button>
    </form>
</div>




<script>
const btnvitor = document.getElementById('btn-vitor');
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');
const msg4 = document.getElementById('caixa-mensagem4');
const btnProxima = document.getElementById('btn-ok');

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


btnvitor.addEventListener('click', mostrarMensagens);

</script>



</body>
</html>





<style>
  body {
         margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/meio3-4.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
            image-rendering: crisp-edges;
            image-rendering: crisp-edges;
        }
        
         .btn-ok {
    margin: 20px auto;
    display: none; /* inicial escondido */
    background: #ffffffff;
    color: black;
    padding: 12px 24px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: opacity 0.5s ease-in-out;
}
.btn-ok.mostrar {
    display: block;
    opacity: 1;
}
        
        
        
        
        
        .personagem-claudio,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .personagem-claudio {
            top: 30%;
            left: 40%;
        }

        .personagem-vitor {
            top: 45%;
            left: 55%;
        }

        .personagem-vitor:hover {
            transform: translate(-50%, -50%) scale(1.4);
        }
</style>