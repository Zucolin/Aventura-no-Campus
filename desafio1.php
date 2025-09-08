<?php
session_start();

if (!isset($_SESSION['permitido1']) || $_SESSION['permitido1'] !== true) {
    header("Location: dialogoclaudio.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="Caixa-dialogo.css">
    <link rel="stylesheet" href="responsivo.css">


<style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/Quadra2.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
        }
        .personagem-renato,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }
        .personagem-renato {
            top: 40%;
            left: 65%;
        }
        .personagem-vitor {
            top: 70%;
            left: 75%;
        }
        .personagem-renato:hover{
            transform: translate(-50%, -50%) scale(1.4);
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
            display: block; /* precisa ser block para o fade funcionar */
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            background: #fcfcfcff;
            color: #000000ff;
            padding: 10px 16px;
            width: 100px;      
            height: 80px;
            font-size: 24px;
            border-radius: 12px;
        }

        #btn-proxima-fase.mostrar {
            opacity: 1;
        }
   
   
   
   
        .modmenu {
            position: fixed;      
            top: 20px;            
            left: 20px;           
            background: rgba(0, 0, 0, 0.41);
            color: white;          
            font-size: 14px;
            padding: 10px;
            border-radius: 8px;
            min-width: 150px;     
            max-width: 250px;    
            z-index: 9999;         
            }

        .modmenu p {
            margin: 2px 0;     
        }

</style>


</head>
<body  >


<audio id="som-fundo" src="sound/MUSIC.mp3" autoplay loop></audio>


<div class="modmenu">
  <p>⚙️ OBJETIVOS</p>
  <br>
  <p><br>Pegar o  Celular</p>
 <p><br> Ajudar o Renato</p>
</div>


    <!-- Personagens -->
    <button id="btn-renato" class="personagem-renato" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/Renato.png" alt="Renato" style="width:90px;height:auto;display:block;">
    </button>

    <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:80px;height:auto;display:block;">
    </button>

    <!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-renato">
        <span class="msg-avatar"></span>
        <span class="msg-text">RENATO: Eae mano qual é a boa?</span>
    </div>

    <div id="caixa-mensagem2" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Fazendo o corre de hoje, Coroa me mando pra cá pra ajudar</span>
    </div>

    <div id="caixa-mensagem3" class="mensagem-renato">
        <span class="msg-avatar"></span>
        <span class="msg-text">RENATO: Bateu o alzhaimer aqui e esqueci as regras de Handbol, passa a visão aí pra nós</span>
    </div>

    <form method="POST" >
<<<<<<< HEAD
    <div id="escolhas" style="display:none; text-align:center; position:fixed; left:50%; top:50%; transform:translate(-50%,-50%); z-index:101; width:100vw;">
    
        <input type="hidden" name="resposta" id="resposta">
        <input type="hidden" name="tempo" id="tempo">

=======
>>>>>>> 91379554553e0cdb141e3b66b49db8a1a60310d5
        <button type="button" class="btn-escolha" id="btn-certo" onclick="enviarResposta('incorreta')">7 jogadores, bola sem pé, 3 segundos, 3 passos, sem drible duplo, área 6m só goleiro, gol cruzar linha, faltas empurrar/segurar/bater, punição amarelo/2min/vermelho, 2 tempos 30min.</button>
        <button type="button" class="btn-escolha" id="btn-errado1" onclick="enviarResposta('correta')"> 7 jogadores, pode usar pé, 3 segundos, 3 passos, drible duplo liberado, área 9m só goleiro, gol conta se tocar na trave, faltas apenas empurrar, punição só cartão amarelo, 2 tempos de 20min.</button>
        <button type="button" class="btn-escolha" id="btn-errado2" onclick="enviarResposta('incorreta')"> 7 jogadores, bola deve ser mordida, 10 segundos, 10 passos, drible com mãos e pés ao mesmo tempo, área 15m qualquer jogador pode entrar, punição inexistente, 2 tempos de 30min.</button>
    
     </div>
    </form>

    <div id="caixa-mensagem4" class="mensagem-renato" style="display:none;">
        <span class="msg-avatar"></span>
        <span class="msg-text">Valeu, vai ganhar um ponto na media em!!</span>
    </div>

<div id="caixa-mensagem5" class="mensagem-vitor" style="display:none;">
        <span class="msg-avatar2"></span>
        <span class="msg-text">Fui mais que obrigado né?!!</span>

     <form action="passou.php" method="post">
    <input type="hidden" name="acao" value="ganhar">
   <a href="meio-1.php"> <button id="btn-proxima-fase" type="submit" name="acesso2" value="ok2">
       OK
    </button><a>
     </form>

</div>

<script>
        // Personagens
        const btnRenato = document.getElementById('btn-renato');
        const btnVitor = document.getElementById('btn-vitor');

        // Mensagens
        const msg1 = document.getElementById('caixa-mensagem1');
        const msg2 = document.getElementById('caixa-mensagem2');
        const msg3 = document.getElementById('caixa-mensagem3');
        const msg4 = document.getElementById('caixa-mensagem4');
        const msg5 = document.getElementById('caixa-mensagem5');

        // Escolhas e botão
        const escolhas = document.getElementById('escolhas');
        const btnCerto = document.getElementById('btn-certo');
        const formProxima = document.getElementById('btn-proxima-fase');

        // Fluxo de mensagens
        function mostrarMensagens() {
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
                     
                        escolhas.style.display = "block";
                    }, 5000);

                }, 5000);

            }, 5000);
        }

        // Eventos para clicar nos personagens
        btnRenato.addEventListener('click', mostrarMensagens);

        // Fluxo da escolha certa
        btnCerto.addEventListener('click', () => {
            msg3.classList.remove('mostrar');
            msg3.style.display = "none";
            escolhas.style.display = "none";

            msg4.style.display = "flex";
            msg4.classList.add('mostrar');

            setTimeout(() => {
                msg4.classList.remove('mostrar');
                msg4.style.display = "none";

                msg5.style.display = "flex";
                msg5.classList.add('mostrar');

                // mostra o botão com fade após 3s
                setTimeout(() => {
                    formProxima.classList.add('mostrar');
                }, 3000);

            }, 5000);
        });

</script>
   

</body>
</html>
