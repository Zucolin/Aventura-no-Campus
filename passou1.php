<?php
session_start();

// Se o botão foi clicado corretamente
if (isset($_POST['acesso1']) && $_POST['acesso1'] === 'ok') {
    $_SESSION['permitido'] = true;
    header("Location: desafio1.php");
    exit;
} else {
    // Se tentarem acessar sem o botão, manda de volta
    header("Location: dialogoclaudio.php");
    exit;
}
  

session_start();

// Se o botão foi clicado corretamente
if (isset($_POST['acesso2']) && $_POST['acesso2'] === 'ok1') {
    $_SESSION['permitido'] = true;
    header("Location: desafio2.php");
    exit;
} else {
    // Se tentarem acessar sem o botão, manda de volta
    header("Location: dialogoclaudio.php");
    exit;
}
  