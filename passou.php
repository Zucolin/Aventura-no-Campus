<?php
session_start();


// Inicializa pontuação se não existir
if (!isset($_SESSION['pontos'])) {
    $_SESSION['pontos'] = 0; // por exemplo
}

// Inicializa tempo de início da fase, se ainda não existe
if (!isset($_SESSION['inicio_fase'])) {
    $_SESSION['inicio_fase'] = time(); // timestamp atual
}

// Calcula quantos segundos passaram desde que começou o desafio
$tempo_passado = time() - $_SESSION['inicio_fase'];

// Subtrai 1 ponto por segundo
$_SESSION['pontos'] -= $tempo_passado;

// Não deixar negativo
if ($_SESSION['pontos'] < 0) {
    $_SESSION['pontos'] = 0;
}

// Atualiza o timestamp para que não perca pontos duplicados se o jogador clicar de novo
$_SESSION['inicio_fase'] = time();

// Se clicou no OK para liberar próxima fase
if (isset($_POST['acesso2']) && $_POST['acesso2'] === 'ok2') {
    // Se quiser adicionar ponto por acerto
    if (isset($_POST['acao']) && $_POST['acao'] === 'ganhar') {
        $_SESSION['pontos'] += 100; // soma 100 pontos por acerto
    }
}



if (isset($_POST['codigo_secreto']) && $_POST['codigo_secreto'] === 'liberar') {
    // Libera todos
    $_SESSION['permitido1'] = true;
    $_SESSION['permitido2'] = true;
    $_SESSION['permitido3'] = true;
    $_SESSION['permitido4'] = true;
    $_SESSION['permitido5'] = true;
    $_SESSION['permitido6'] = true;
    $_SESSION['permitido7'] = true;
    $_SESSION['permitido8'] = true;
    $_SESSION['permitido9'] = true;

    header("Location: dialogoclaudio.php"); // manda direto
    exit;
}






// Botão acesso1
if (isset($_POST['acesso1']) && $_POST['acesso1'] === 'ok1') {
    $_SESSION['permitido1'] = true;
    header("Location: desafio1.php");
    exit;

// Botão acesso2
} elseif (isset($_POST['acesso2']) && $_POST['acesso2'] === 'ok2') {
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

         //botão acesso7
} elseif (isset($_POST['acesso7']) && $_POST['acesso7'] === 'ok7') {
    $_SESSION['permitido7'] = true;
    header("Location: desafio4.php");
    exit;

    //botão acesso8
} elseif (isset($_POST['acesso8']) && $_POST['acesso8'] === 'ok8') {
    $_SESSION['permitido8'] = true;
    header("Location: desafio5.php");
    exit;

     //botão acesso9
} elseif (isset($_POST['acesso9']) && $_POST['acesso9'] === 'ok9') {
    $_SESSION['permitido8'] = true;
    header("Location: final.php");
    exit;

 
    // Nenhum botão correto
} else {
    header("Location: dialogoclaudio.php");
    exit;
}
?>
