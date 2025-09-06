<?php
session_start();

$resposta_correta = "1,4,12,30,68";
$resposta = $_POST['resposta'] ?? '';

if(strtolower(trim($resposta)) === strtolower($resposta_correta)){
    // Gera um "código" para desbloquear as próximas mensagens
    $_SESSION['codigo_acerto2'] = uniqid(); // chave única
    echo json_encode(['sucesso' => true, 'codigo' => $_SESSION['codigo_acerto2']]);
} else {
    echo json_encode(['sucesso' => false]);
}
?>
