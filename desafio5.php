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
  <button id="fecharBg" class="btn-fechar">X</button>
  <div class="codigo"></div>
  <form class="form1" action="verificar.php" method="POST">
    <label for="resposta">Digite a resposta:</label><br>
    <input  placeholder="1,4,12,  ,  " type="text" id="resposta" name="resposta" required><br>
    <button value="ok7" class="enviar" type="submit">Enviar</button>
  </form>
</div>

<div id="caixa-mensagem4" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Não acredito que consegui, essa foi difícil, devo aprestar mais atenção nas aulas de Katia**
    </span>
</div>

<div id="caixa-mensagem5" class="mensagem-vitor">
    <span class="msg-avatar2"></span>
    <span class="msg-text">
        VITOR: **Vamo embora daqui**
    </span>
</div>

<form method="post" action="passou.php" >
    <button id="btn-laboratorio" name="acesso9" value="ok9" class="btn-laboratorio" style="display:none;">
        Ir Embora ->
    </button>
</form>


<script> 

const btnsenha = document.getElementById('btn-senha');
const btncofre = document.getElementById('btn-cofre');
const btnProxima = document.getElementById('btn-laboratorio');


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


   
        .btn-laboratorio {
            display: inline-block;
            padding: 15px 25px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            transition: 0.3s;
            margin: 3000px auto;  
            display: block;      
            position: fixed;  
            margin-top: 50px;
        }

        .btn-laboratorio:hover {
            background-color: #2980b9;
       }
</style>