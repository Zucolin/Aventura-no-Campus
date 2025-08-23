


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
 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>

    <button id="btn-juliana" class="personagem-juliana" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/juliana.png" alt="Juliana" style="width:90px;height:auto;display:block;">
    </button>



 <button id="btn-livro-misterio" class="livro-misterio" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/livro-qr.png" alt="Livro-misterioso" style="width:10px; ">
    </button>


<!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-juliana">
        <span class="msg-avatar4"></span>
        <span class="msg-text">JULIANA: Oi veio ler?</span>
    </div>

    <div id="caixa-mensagem2" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Eu não faço amor com livros, vim procurar pelo livro do Celso</span>
    </div>

    <div id="caixa-mensagem3" class="mensagem-renato">
        <span class="msg-avatar4"></span>
        <span class="msg-text">JULIANA: Tudo bem. procure passando o Mouse pelas prateleiras </span>
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
            }, 6000); // tempo da terceira mensagem
       
        }, 4000); // tempo da segunda mensagem

    }, 4000); // tempo da primeira mensagem
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
            top: 82%;
            left: 82%;
        }
       
       .livro-misterio:hover {
            transform: translate(-50%, -50%) scale(20.3);
            opacity: 100%;
       }
       
       
       
       


        .personagem-juliana,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .personagem-juliana {
            top: 40%;
            left: 25%;
            transform: scaleX(-1);
            transition: transform 0.3s ease;
        }

        .personagem-vitor {
            top: 65%;
            left: 15%;
        }

        .personagem-juliana:hover{
            transform: scale(1.4) scaleX(-1);
        }
       
       
       
       
       
       
       </style>