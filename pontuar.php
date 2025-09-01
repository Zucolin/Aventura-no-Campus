<?php
session_start();

// Inicializa pontuação se ainda não existir
if(!isset($_SESSION['pontuacao'])){
    $_SESSION['pontuacao'] = 0;
}

// Recebe quantos pontos somar via GET
$pontos = $_GET['pontos'] ?? 0;

// Soma os pontos
$_SESSION['pontuacao'] += (int)$pontos;

// Retorna JSON (opcional, útil para fetch)
echo json_encode(['sucesso' => true, 'pontuacao' => $_SESSION['pontuacao']]);
