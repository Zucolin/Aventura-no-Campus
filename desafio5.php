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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Caixa-dialogo.css">
    <link rel="stylesheet" href="responsivo.css">


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
        position: fixed;

    }
    .personagem-vitor {
        top: 45%;
        left: 30%;
    }
    .senha {
        top: 45%;
        left: 80%;
        position: fixed;
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



    .bg {
        background-image: url('./img/cofre.png');
        background-size: cover;
        width: 800px;
        height: 800px;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
        margin-left: 22%;
        margin-top: -3%;
    }
    .codigo {
        background-image: url('./img/.png');
        background-size: cover; /* Faz a imagem ocupar a tela inteira */
        position: absolute;
        transform: translate(-50%, -50%);
        width: 280px;
        height: 60px;
        transition: transform 0.3s ease;
    }
    .codigo {
        top: 30%;
        left: 52%;
    }
      .form1 {
        padding: 20px 30px;
        margin-top: 260px;
        text-align: center;
        margin-left: 50px;
    }
    input[type="text"] {
      padding: 8px;
      border: 1px solid #cccccc;
      border-radius: 6px;
      margin: 10px 0;
      width: 200px;
    }
    .enviar {
        padding: 40px 110px;
        border: none;
        border-radius: 6px;
        opacity: 100%;
        background: none
        cursor: pointer;
        margin-top: 80px;

    }
    .btn-fechar {
        position: absolute;
        top: 60px;
        right: 10px;
        background: red;
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        cursor: pointer;
        font-weight: bold;
    }



   .btn-sair {
        display: none;
        padding: 15px 25px;
        background-color: #e05b5bff;
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
    .btn-sair:hover {
        background-color: #550707ff;
    }



    .tv-falha {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: black;
        mix-blend-mode: screen;
        z-index: 9999;
        pointer-events: none;
        overflow: hidden;
    }
    .tv-falha::before,
    .tv-falha::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: repeating-linear-gradient(
        to bottom,
        rgba(255, 255, 255, 0.52) 20px,
        rgba(255,255,255,0.1) 2px,
        transparent 2px,
        transparent 150px
    );
        animation: glitchMove 0.2s infinite;
    }
    .tv-falha::after {
        background: repeating-linear-gradient(
        to bottom,
        rgba(5, 76, 217, 0.84) 0px,
        rgba(0, 255, 255, 0.3) 2px,
        transparent 2px,
        transparent 4px
    );
        animation: glitchMove 0.15s infinite reverse;
    }
    @keyframes glitchMove {
        from { transform: translateY(0); }
        to   { transform: translateY(-2px); }
    }
    .vinheta {
        width: 1600px;
        height: 800px;
        background: url('sua-imagem.jpg') center/cover no-repeat;
        box-shadow: inset 0 0 150px rgba(0,0,0,0.8);
        position: fixed;
    }



    .modmenu {
        position: fixed;       /* fica preso no canto */
        top: 20px;             /* distância do topo */
        left: 20px;           /* distância da esquerda */
        background: rgba(49, 3, 3, 0.39); /* preto transparente */
        color: white;          /* texto branco */
        font-size: 14px;
        padding: 10px;
        border-radius: 8px;
        min-width: 150px;      /* largura mínima */
        max-width: 250px;      /* largura máxima */
        z-index: 9999;         /* sempre acima */
    }
    .modmenu h2 {
        margin: 2px 0;  
        text-shadow: 0px 0px 9px rgba(246, 246, 246, 1);
        color:red 
    }

</style>


</head>
<body>


<audio id="som-fundo" src="sound/PASSOS.mp3" loop autoplay></audio>

<div class="modmenu">
  <p>⚙️ OBJETIVOS/SPOLIER</p>
  <br>
  <h2><br>Roubar o Celular</h2>
</div>

<div class="vinheta">
  <p style="color:white; font-size:24px;"></p>
</div>

<div class="tv-falha"></div>


    <h1 style=" margin-top: 20px; distância do topo 
      font-size: 1.5rem;  tamanho médio 
      color: #333;
      font-family: Arial, sans-serif;">SALA DO CLÁUDIO</h1>


    <!-- Personagens -->
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
        VITOR: **Vou pegar o que é meu agora**
    </span>
</div>

<div id="caixa-mensagem2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Vamos dar uma olhada em tudo aqui**
    </span>
</div>

<div id="caixa-cofre" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Meu  celular deve estar aqui dentro do cofre**
    </span>
</div>

<div id="caixa-senha1" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Interessante... Deve ser a senha do cofre, parece faltar dois números**
    </span>
</div>

<div id="caixa-senha2" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Só de bater o olho percebo ter uma sequência lógica de números aqui**
    </span>
</div>

<div id="caixa-senha3" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Só me resta tentar descobrir isso, diria que tem uma mistura de "P.G" e de "P.A"**
    </span>
</div>



<div class="bg">
  <button id="fecharBg" class="btn-fechar">X</button>
  <div class="codigo"></div>
  <form class="form1" action="verificar.php" method="POST">
    <label for="resposta">Digite a resposta:</label><br>
    <input  placeholder="1,4,12,  ,  " type="text" id="resposta" name="resposta" required><br>
    <button value="ok7" class="enviar" type="submit">Abrir</button>
  </form>
</div>



<div id="caixa-mensagem4" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Não acredito que consegui, essa foi difícil, devo prestar mais atenção nas aulas de Kátia**
    </span>
</div>

<div id="caixa-mensagem5" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Vamos embora daqui**
    </span>
</div>

<form method="post" action="passou.php" >
    <input type="hidden" name="acao" value="ganhar">
    <button id="btn-sair" name="acesso9" value="ok9" class="btn-sair">
        Ir Embora ->
    </button>
</form>


<script> 

const btnsenha = document.getElementById('btn-senha');
const btncofre = document.getElementById('btn-cofre');
const btnProxima = document.getElementById('btn-sair');
//   CARREGAR PAGINA
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
//    COFRE   
const msg3 = document.getElementById('caixa-cofre');
const bg = document.querySelector('.bg');
const fecharBtn = document.getElementById('fecharBg');
//    SENHA
const msg4 = document.getElementById('caixa-senha1');
const msg5 = document.getElementById('caixa-senha2');
const msg6 = document.getElementById('caixa-senha3');

const msg7 = document.getElementById('caixa-mensagem4');
const msg8 = document.getElementById('caixa-mensagem5');


/*    CARREGAR PAGINA   */
function mostrarMensagens() {
    msg1.style.display = "flex"; // mostra a primeira
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.style.display = "none"; // esconde a primeira
        msg2.style.display = "flex"; // mostra a segunda
        msg2.classList.add('mostrar');
    setTimeout(() => {
       
      msg2.style.display = "none"; // esconde a primeira
    
    }, 8000);
    
    }, 15000); // tempo que a primeira fica visível (4 segundos)
}

document.addEventListener('DOMContentLoaded', function() {
    mostrarMensagens(); // chama sua função sem precisar clicar
});


// SENHA 
function mostrarMensagens1() {
     msg3.style.display = "none"; // esconde a primeira
    msg1.style.display = "none"; // esconde a primeira
    msg4.style.display = "flex";
    msg4.classList.add('mostrar');

    setTimeout(() => {
        msg4.classList.remove('mostrar');
        msg4.style.display = "none";

        msg5.style.display = "flex";
        msg5.classList.add('mostrar');

        setTimeout(() => {
            msg5.classList.remove('mostrar');
            msg5.style.display = "none";

            msg6.style.display = "flex";
            msg6.classList.add('mostrar');

            setTimeout(() => {
                msg6.classList.remove('mostrar');
                msg6.style.display = "none";

                
                   // Aqui você pode adicionar o que deve acontecer após a última mensagem
               }, 9000);
           }, 8000);
       }, 8000);
    }

btnsenha.addEventListener('click', mostrarMensagens1);


/*    COFRE   */
function mostrarMensagens2() {
      msg4.classList.remove('mostrar');
        msg4.style.display = "none";
  msg1.style.display = "none"; // esconde a primeira
    msg3.style.display = "flex"; // mostra a primeira
    msg3.classList.add('mostrar');

    setTimeout(() => {
        msg3.style.display = "none"; // esconde a primeira
        bg.style.display = "block"; // mostra o cofre  
        }, 5000);
}

btncofre.addEventListener('click', mostrarMensagens2);

fecharBtn.addEventListener('click', () => {
  bg.style.display = 'none';
});

const form2 = document.querySelector('.bg form'); 
form2.addEventListener('submit', function(e){
    e.preventDefault();

    const resposta = document.getElementById('resposta').value;

    fetch('verificar2.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `resposta=${encodeURIComponent(resposta)}`
    })
    .then(res => res.json())
    .then(data => {
        if(data.sucesso){
            // --- INICIO ADIÇÃO DE PONTOS ---
            fetch('pontuar.php?pontos=100') // soma 10 pontos
                .then(res => res.json())
                .then(pontosData => {
                    console.log("Pontuação atual:", pontosData.pontuacao);
                });
            // --- FIM ADIÇÃO DE PONTOS ---

            document.querySelector('.bg').style.display = 'none';

            // AQUI começa pela msg7
            msg7.style.display = 'flex';
            msg7.classList.add('mostrar');

            setTimeout(() => {
                msg7.style.display = 'none';
                msg8.style.display = 'flex';
                msg8.classList.add('mostrar');

                setTimeout(() => {
                    msg8.style.display = 'none';
                btnProxima.style.display = "block";
                setItemTimeout(() => {
                    

                }, 5000);
                
                }, 5000);

            }, 5000);

        } else {
            alert("Senha incorreta! Tente novamente.");
        }
    });
});

</script>


</body>
</html>