<?php
session_start();






if (isset($_POST['codigo_secreto']) && $_POST['codigo_secreto'] === 'liberar') {
    // Libera todos
    $_SESSION['permitido1'] = true;
    $_SESSION['permitido2'] = true;
    $_SESSION['permitido3'] = true;
    $_SESSION['permitido4'] = true;
    $_SESSION['permitido5'] = true;
    $_SESSION['permitido6'] = true;

    header("Location: dialogoclaudio.php"); // manda direto
    exit;
}






// Botão acesso1
if (isset($_POST['acesso1']) && $_POST['acesso1'] === 'ok') {
    $_SESSION['permitido1'] = true;
    header("Location: desafio1.php");
    exit;

// Botão acesso2
} elseif (isset($_POST['acesso2']) && $_POST['acesso2'] === 'ok1') {
    $_SESSION['permitido2'] = true;
    header("Location: meio-1.php");
    exit;

// Botão acesso3
} elseif (isset($_POST['acesso3']) && $_POST['acesso3'] === 'ok3') {
    $_SESSION['permitido3'] = true;
    header("Location: biblioteca.php");
    exit;

// Botão acesso4
} elseif (isset($_POST['acesso4']) && $_POST['acesso4'] === 'ok4') {
    $_SESSION['permitido4'] = true;
    header("Location: brefeitorio.php");
    exit;

    //botão acesso5
} elseif (isset($_POST['acesso5']) && $_POST['acesso5'] === 'ok5') {
    $_SESSION['permitido5'] = true;
    header("Location: desafio2.php");
    exit;

       //botão acesso6
} elseif (isset($_POST['acesso6']) && $_POST['acesso6'] === 'ok6') {
    $_SESSION['permitido6'] = true;
    header("Location: desafio3.php");
    exit;



    // Nenhum botão correto
} else {
    header("Location: dialogoclaudio.php");
    exit;
}
?>
