
<?php
session_start();

if (!isset($_SESSION['permitido4']) || $_SESSION['permitido4'] !== true) {
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

<form method="post" action="passou.php" style="display:inline;">
    <button id="btn-laboratorio" name="acesso5" value="ok5" class="btn-laboratorio" style="display:none;">
        Ir para o laboratório ->
    </button>
</form>


 <button id="btn-livro-celso" class="livro-celso" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/livro-celso.png" alt="Livro-do-Celso" style="width:50px; ">
    </button>

<!-- Personagens -->
 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:60px;height:auto;display:block;">
    </button>


<!--  mensagem do livro    -->


     <div id="caixa-mensagem4" class="mensagem-vitor">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR:   Otimo achei até que enfim </span>
    </div>

    <div id="caixa-mensagem5" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR:  Cansado já.. Só queria meu celular</span>
    </div>

   

<div id="caixa-mensagem7" class="mensagem-livro-misterio">
        <span class="msg-avatar-celso"></span>
        <span class="msg-livro-misterio">                    <STRONG>      LIVRO DO CELSO   </STRONG></span>
    </div>



<script>


const btnLivro = document.getElementById('btn-livro-celso');
const msg7 = document.getElementById('caixa-mensagem7');
const msg4 = document.getElementById('caixa-mensagem4');
const msg5 = document.getElementById('caixa-mensagem5');
const msg6 = document.getElementById('btn-laboratorio');
btnLivro.addEventListener('click', () => {
    // Mostra msg7 primeiro
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
                    msg6.style.display = 'block';
                }, 4000); // tempo msg6
                
                // Aqui você pode colocar algo após a última mensagem
            }, 4000); // tempo msg5

        }, 4000); // tempo msg4

    }, 4000); // tempo msg7
});

</script>





</body>
</html>










<style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('img/refeitorio.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            image-rendering: pixelated;
            image-rendering: crisp-edges;
            image-rendering: crisp-edges;
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
            top: 25%;
            left: 85%;
        }

       .livro-celso:hover {
            transform: translate(-50%, -50%) scale(2.0);
            opacity: 100%;
       }
       
       
        


        .personagem-vitor {
            position: absolute;
            transform: translate(-50%, -50%);
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }
        .personagem-vitor {
            top: 60%;
            left: 45%;
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
      margin: 30px;
    }
      .btn-laboratorio {
      display: inline-block;
      padding: 15px 25px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      font-size: 30px;
      border-radius: 8px;
      transition: 0.3s;
      margin: 300px 590px;
      position: fixed;
    }

    .btn-laboratorio:hover {
      background-color: #2980b9;
    }
      
      </style>