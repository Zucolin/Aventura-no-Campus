<?php
session_start();

if (isset($_POST['acesso3']) && $_POST['acesso3'] === 'ok3') {
    $_SESSION['permitido3'] = true;
    header("Location: biblioteca.php");
    exit;
} else {
    // Se tentarem acessar direto este arquivo sem o botão:
    header("Location: dialogoclaudio.php");
    exit;
}