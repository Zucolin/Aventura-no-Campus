<?php
session_start();

if (isset($_POST['acesso2']) && $_POST['acesso2'] === 'ok1') {
    $_SESSION['permitido2'] = true;
    header("Location: meio-1.php");
    exit;
} else {
    // Se tentarem acessar direto este arquivo sem o botão:
    header("Location: dialogoclaudio.php");
    exit;
}