<?php

session_start();

if (!isset($_SESSION['permitido7']) || $_SESSION['permitido7'] !== true) {
    // Se não tiver vindo pelo botão certo, volta
    header("Location: dialogoclaudio.php");
    exit;
}

?>