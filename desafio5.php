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





<div id="caixa-cofre" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Nossa um cofre!!, Meu  celular deve estar aqui dentro**
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






<div class="bg">
  <div class="codigo"></div>
  <form class="form1" action="verificar.php" method="POST">
    <label for="resposta">Digite a Senha:</label><br>
    <input type="text" id="resposta" name="resposta" required><br>
    <button value="ok7" class="enviar" type="submit">Enviar</button>
  </form>
</div>





<script> 

const btnsenha = document.getElementById('btn-senha');
const btncofre = document.getElementById('btn-cofre');


//   CARREGAR PAGINA
const msg1 = document.getElementById('caixa-mensagem1');
const msg2 = document.getElementById('caixa-mensagem2');

//    COFRE   
const msg3 = document.getElementById('caixa-cofre');

//    SENHA
const msg4 = document.getElementById('caixa-senha1');
const msg5 = document.getElementById('caixa-senha2');
const msg6 = document.getElementById('caixa-senha3');




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
    
    }, 5000);
    
    }, 4000); // tempo que a primeira fica visível (4 segundos)
    

}


document.addEventListener('DOMContentLoaded', function() {
    mostrarMensagens(); // chama sua função sem precisar clicar
});








// SENHA 


function mostrarMensagens1() {
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
               }, 5000);
           }, 5000);
       }, 5000);
    }

btnsenha.addEventListener('click', mostrarMensagens1);





/*    COFRE   */
function mostrarMensagens2() {
    msg3.style.display = "flex"; // mostra a primeira
    msg3.classList.add('mostrar');

    setTimeout(() => {
        msg3.style.display = "none"; // esconde a primeira
    }, 5000);
}

btncofre.addEventListener('click', mostrarMensagens2);




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








         .bg {
      background-image: url('./img/cofre.png');
  background-size: cover;
  width: 800px;
  height: 800px;
  position: fixed;
  top: 0;
  left: 0;
  display: block;
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

</style>