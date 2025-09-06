<?php
session_start();

$resposta_correta = "Willian";
$resposta = $_POST['resposta'] ?? '';

if(strtolower(trim($resposta)) === strtolower($resposta_correta)){
    // Gera um "código" para desbloquear as próximas mensagens
    $_SESSION['codigo_acerto'] = uniqid(); // chave única
    echo json_encode(['sucesso' => true, 'codigo' => $_SESSION['codigo_acerto']]);
} else {
    echo json_encode(['sucesso' => false]);
}
?>
