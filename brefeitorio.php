
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


<audio id="som-fundo" src="sound/MUSIC.mp3" loop autoplay></audio>




<div class="modmenu">
  <p>⚙️ OBJETIVOS/SPOLIER</p>
  <br>
  <p><br>Pegar o  Celular</p>
 <p><br> Entregar o Livro do Celso</p>
 <p><br> Ir ao Laboratorio</p>
  
</div>





<form method="post" action="passou.php" >
    <button id="btn-laboratorio" name="acesso5" value="ok5" class="btn-laboratorio" style="display:none;">
        Ir para o laboratório ->
    </button>
</form>


 <button id="btn-livro-celso" class="livro-celso" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/livro-celso.png" alt="Livro-do-Celso" style="width:60px; ">
    </button>

<!-- Personagens -->
 <button id="btn-vitor" class="personagem-vitor" style="background:none;border:none;padding:0;cursor:pointer;">
        <img src="img/protagonista.png" alt="Vitor" style="width:80px;height:auto;display:block;">
    </button>


<!--  mensagem do livro    -->

    <div id="caixa-mensagem4" class="mensagem-vitor">
        <span class="msg-avatar2"></span>
        <span class="msg-text">VITOR:   Ótimo, achei até que enfim </span>
    </div>

    <div id="caixa-mensagem5" class="mensagem-vitor">
        <div class="msg-avatar2"></div>
        <span class="msg-text">VITOR:  Cansado já... Só queria meu celular</span>
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
            opacity: 80%;
        }

        .livro-celso {
            top: 25%;
            left: 85%;
        }

       .livro-celso:hover {
            transform: translate(-50%, -50%) scale(2.8);
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

      
      



         .modmenu {
  position: fixed;       /* fica preso no canto */
  top: 20px;             /* distância do topo */
  left: 20px;           /* distância da esquerda */
  background: rgba(0, 0, 0, 0.7); /* preto transparente */
  color: white;          /* texto branco */
  font-size: 14px;
  padding: 10px;
  border-radius: 8px;
  min-width: 150px;      /* largura mínima */
  max-width: 250px;      /* largura máxima */
  z-index: 9999;         /* sempre acima */
}

.modmenu p {
  margin: 2px 0;         /* espaço entre as linhas */
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
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

        .btn-laboratorio:hover {
            background-color: #2980b9;
       }
     
      </style>