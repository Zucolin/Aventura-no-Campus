<?php

session_start();

if (!isset($_SESSION['permitido5']) || $_SESSION['permitido5'] !== true) {
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
   
 <button id="btn-livro-celso" class="livro-celso" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/livro-celso.png" alt="Livro-do-Celso" style="width:50px; ">
    </button>
 
 
 <button id="btn-celso" class="personagem-celso" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/Celso.png" alt="Celso" style="width:70px;height:auto;display:block;">
    </button>

    <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>

<!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-vitor">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Ae professor ache teu livro aqui</span>
    </div>

    <div id="caixa-mensagem2" class="mensagem-celso">
        <div class="msg-avatar3"></div>
        <span class="msg-text">CELSO: Otimo, ajude eu aqui rapidinho, porque o Fabio necessita da sua ajuda depois</span>
    </div>

    <div id="caixa-mensagem3" class="mensagem-vitor">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Denovo.. tão me enxendo de afazeres, é bom vocês me elogiarem pro Claudio!! </span>
    </div>

    <div id="caixa-mensagem4" class="mensagem-celso">
        <span class="msg-avatar3"></span>
        <span class="msg-text">CELSO:  Pode deixar!! Agora vá até a mesa e pegue o produto </span>
    </div>



 <!-- Escolhas -->
    <div id="escolhas" style="display:none; text-align:center; position:fixed; left:50%; top:50%; transform:translate(-50%,-50%); z-index:101; width:100vw;">
        <button class="btn-escolha" id="btn-certo">
        Metano (CH₄) que reage com oxigênio (O₂) liberando energia em forma de calor e luz.
        </button>
        <button class="btn-escolha" id="btn-errado1">
        Hidroxido de sodio (NaOH) que reage com ácido clorídrico (HCl) liberando água e sal.
        </button>
        <button class="btn-escolha" id="btn-errado2">
        Carbonato de cálcio (CaCO₃) que reage com ácido sulfúrico (H₂SO₄) liberando gás carbônico (CO₂) e água.
        </button>
    </div>

    <div id="caixa-mensagem5" class="mensagem-renato" >
        <span class="msg-avatar"></span>
        <span class="msg-text">Bom garoto.. Agora vai que Fabio te espera</span>
     
      <form action="passou.php" method="post">
    <button id="btn-proxima-fase" type="submit" name="acesso6" value="ok6" style="display:none;">
        Ok
    </button>
</form>

   </div>






<script>
// Seleção dos elementos
const btnlivro = document.getElementById('btn-livro-celso');
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');
const msg4 = document.getElementById('caixa-mensagem4');
const msg5 = document.getElementById('caixa-mensagem5');
const escolhas = document.getElementById('escolhas');
const btnCerto = document.getElementById('btn-certo');
const btnErrado1 = document.getElementById('btn-errado1');
const btnErrado2 = document.getElementById('btn-errado2');
const btnProxima = document.getElementById('btn-proxima-fase');

// Função para mostrar mensagens sequenciais
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

               setTimeout(() => {
                  

                    // Mostra as escolhas
                    escolhas.style.display = "block";

                }, 4000); // tempo da msg4

            }, 5000); // tempo da msg3

        }, 5000); // tempo da msg2

    }, 3000); // tempo da msg1
}

// Ao clicar no livro, inicia a sequência
btnlivro.addEventListener('click', mostrarMensagens);

// Funções das escolhas
btnCerto.addEventListener('click', () => {
    msg4.classList.remove('mostrar'); // esconde msg4
    msg4.style.display = "none";
    escolhas.style.display = "none"; // esconde escolhas
    msg5.style.display = "flex";
    msg5.classList.add('mostrar');
    // libera botão da próxima fase
    btnProxima.style.display = "block";
});

btnErrado1.addEventListener('click', () => {
    alert("Ops! Não é essa a reação correta. Tente novamente.");
});

btnErrado2.addEventListener('click', () => {
    alert("Ops! Não é essa a reação correta. Tente novamente.");
});
</script>





</body>
</html>





<style>
        body {
         margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/laboratorio.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
            image-rendering: crisp-edges;
            image-rendering: crisp-edges;
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
            top: 15%;
            left: 90%;
        }

        .personagem-vitor {
            top: 40%;
            left: 78%;
        }
         
      

           .livro-celso{
            position: fixed;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
            opacity: 70%;
        }

        .livro-celso {
            top: 35%;
            left: 78%;
        }
       .livro-celso:hover {
            transform: translate(-50%, -50%) scale(2.0);
            opacity: 100%;
       }
       
       
       
       











        .btn-escolha {
            display: block;
            width: 90vw;
            max-width: 10000px;
            margin: 20px auto;
            padding: 24px 0;
            font-size: 22px;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-escolha:nth-child(1) {
            background: #4b90ff;
        }

        .btn-escolha:nth-child(2) {
            background: #43c96e;
        }

        .btn-escolha:nth-child(3) {
            background: #f7b32b;
        }

        .btn-escolha:hover {
            filter: brightness(1.1);
        }

        #btn-proxima-fase {
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
#btn-proxima-fase.mostrar {
    display: block;
    opacity: 1;
}

       
       
       
       
       
       
       
       
       
       </style>