
<?php

session_start();

if (!isset($_SESSION['permitido6']) || $_SESSION['permitido6'] !== true) {
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
  
</head>
<body>
    



<div style="background:none; color: white; width:100px; height:100px; border-radius:8px; 
            position:absolute; top:85%; left:50.4%; transform:translate(-50%,-50%);">
<p><STRONG>INVENTARIO</STRONG></p>
</div>

<div style="background:white; width:100px; height:100px; border-radius:8px; 
            position:absolute; top:90%; left:50.4%; transform:translate(-50%,-50%);">
</div>


<!-- Botão do livro -->
  <button id="btn-livro-misterio" class="livro-misterio">
    <img src="img/livro-qr.png" alt="Livro misterioso" style="width:100%;">
  </button>

  <!-- Popup -->
  <div id="popup-livro" class="popup-livro">
    <div class="popup-conteudo">
      <span id="fechar-popup" class="fechar">&times;</span>
      <img src="img/livro-qr2.png" alt="Livro aberto">
    </div>
  </div>















 <button id="btn-fabio" class="personagem-fabio" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/Fabio.png" alt="Fabio" style="width:150px;height:auto;display:block;">
    </button>

    <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>


<!-- Mensagens -->
    <div id="caixa-mensagem1" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO: Eae Vitor, to com problema urgente aqui, mecheram no meu computador ai</span>
    </div>

     <div id="caixa-mensagem2" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO:  Suspeito terem usado uma linguagem de simbolos já existente, agora para eu poder mecher, tenho que saber essa linguagem</span>
    </div>
    
    <div id="caixa-mensagem3" class="mensagem-fabio">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR: Beleza deixa eu ver um negocio aqui> <br><span style="color: yellow; display: block;">** ABRA O INVENTARIO, LOGO A BAIXO**</span></span>
    </div>

    <div id="caixa-mensagem4" class="mensagem-fabio">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Que conhecidencia incrivel.. conhecidencia de jogo isso!!! O livro que achei tem envolvimento com seu computador </span>
    </div>

    <div id="caixa-mensagem5" class="mensagem-fabio">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Hhummmm.. Vamos dar uma olhada nisso!!  </span>
    </div>


 <div class="bg">
  <div class="codigo"></div>
  <form class="form1" action="verificar.php" method="POST">
    <label for="resposta">Digite a resposta:</label><br>
    <input type="text" id="resposta" name="resposta" required><br>
    <button value="ok7" class="enviar" type="submit">Enviar</button>
  </form>
</div>

<div id="caixa-mensagem6" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO: Azideia, será que o mano Willian ta contra mim? </span>
    </div>

     <div id="caixa-mensagem7" class="mensagem-fabio">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR: Eu lá vou saber Fabio  </span>
    </div>

    <div id="caixa-mensagem8" class="mensagem-fabio">
        <span class="msg-avatar5"></span>
        <span class="msg-text">FABIO: É uma facada nas costas isso, Poder deixar que daqui resolvo, VLW Vitor!!! </span>
    <form action="passou.php" method="post">
    <button id="btn-proxima-fase" type="submit" name="acesso7" value="ok7" style="display:none;">
        Ok
    </button>
</form>

    </div>


    

<script>
    const btnfabio = document.getElementById('btn-fabio');
    const btnLivro = document.getElementById("btn-livro-misterio");
    const popup = document.getElementById("popup-livro");
    const fechar = document.getElementById("fechar-popup");
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');
const msg3 = document.getElementById('caixa-mensagem3');
const msg4 = document.getElementById('caixa-mensagem4');
const msg5 = document.getElementById('caixa-mensagem5');
const msg6 = document.getElementById('caixa-mensagem6');
const msg7 = document.getElementById('caixa-mensagem7');
const msg8 = document.getElementById('caixa-mensagem8');
const bg = document.querySelector('.bg');
const btnProxima = document.getElementById('btn-proxima-fase');


  
    btnLivro.addEventListener("click", () => {
      popup.style.display = "block";
    });

    fechar.addEventListener("click", () => {
      popup.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === popup) {
        popup.style.display = "none";
      }
    });
  
  







  
  
 function mostrarMensagens() {
    msg1.style.display = "flex"; // mostra a primeira
    msg1.classList.add('mostrar');

    setTimeout(() => {
        msg1.style.display = "none";
        msg2.style.display = "flex";
        msg2.classList.add('mostrar');

        setTimeout(() => {
            msg2.style.display = "none";
            msg3.style.display = "flex";
            msg3.classList.add('mostrar');
            
            setTimeout(() => {
                msg3.style.display = "none";
                msg4.style.display = "flex";
                msg4.classList.add('mostrar');
                
                setTimeout(() => {
                    msg4.style.display = "none";
                    msg5.style.display = "flex";
                    msg5.classList.add('mostrar');

                    // Exibe o formulário depois da msg5
                    setTimeout(() => {
                      
                        msg5.style.display = "none";
                        bg.style.display = "block"; // mostra o formulário
                        
                    }, 5000); // tempo que o msg5 fica visível

                }, 15000); // tempo da quarta mensagem

            }, 5000); // tempo da terceira mensagem

        }, 8000); // tempo da segunda mensagem

    }, 5000); // tempo da primeira mensagem
}

// Ativa a sequência ao clicar no Fabio
btnfabio.addEventListener('click', mostrarMensagens);
  
  
  const form = document.querySelector('.bg form');
form.addEventListener('submit', function(e){
    e.preventDefault(); // evita o reload da página

   
   
   
    const resposta = document.getElementById('resposta').value;

    fetch('verificar.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `resposta=${encodeURIComponent(resposta)}`
    })
    .then(res => res.json())
    .then(data => {
        if(data.sucesso){
            // Esconde o formulário
            document.querySelector('.bg').style.display = 'none';

            // Gera a sequência das próximas mensagens
            msg6.style.display = 'flex';
            msg6.classList.add('mostrar');
            setTimeout(() => {
                msg6.style.display = 'none';
                msg7.style.display = 'flex';
                msg7.classList.add('mostrar');
                setTimeout(() => {
                    msg7.style.display = 'none';
                    msg8.style.display = 'flex';
                    msg8.classList.add('mostrar');

                     btnProxima.style.display = "block";
                }, 5000);
            }, 5000);

        } else {
            alert("Resposta incorreta! Tente novamente.");
        }
    });
});





  </script>





</body>
</html>


<style>

  body {
         margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/lie.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
            image-rendering: crisp-edges;
            image-rendering: crisp-edges;
        }
        
        


        
         .personagem-fabio,
        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 140px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .personagem-fabio {
            top: 40%;
            left: 70%;
        }

        .personagem-vitor {
            top: 60%;
            left: 78%;
        }
        .personagem-fabio:hover{
            transform: translate(-50%, -50%) scale(1.4);
        }





         /* Botão do livro */
    .livro-misterio {
      position: fixed;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      background: none;
      border: none;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .livro-misterio:hover {
      transform: translate(-50%, -50%) scale(1.3);
    }

    /* Fundo escuro do popup */
    .popup-livro {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(240, 240, 240, 0.57);
      z-index: 9999;
    }

    /* Caixa centralizada */
    .popup-conteudo {
      position: absolute;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      background: none;
      padding: 20px;
      border-radius: 12px;
      max-width: 90%;
      max-height: 90%;
      box-sizing: border-box;
      text-align: center;
    }

    .popup-conteudo img {
      max-width: 100%;
      max-height: 80vh;
      border-radius: 8px;
    }

    .fechar {
      position: absolute;
      top: 10px; right: 15px;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      cursor: pointer;
    }

    .fechar:hover {
      color: red;
    }



 .bg {
      background-image: url('./img/computador.png');
  background-size: cover;
  width: 1500px;
  height: 800px;
  position: fixed;
  top: 0;
  left: 0;
  display: none;
  

    }
    
    .codigo {
      background-image: url('./img/codigo.png');
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
      opacity: 0%;
    background: none
     cursor: pointer;
      margin-top: 80px;

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