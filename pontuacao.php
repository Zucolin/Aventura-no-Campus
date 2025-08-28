<?php
session_start();

if (!isset($_SESSION['pontos'])) {
    $_SESSION['pontos'] = 0;
}

// Função para adicionar pontos
function adicionarPontos($qtd) {
    $_SESSION['pontos'] += $qtd;
}

// Função para pegar a pontuação atual
function getPontos() {
    return $_SESSION['pontos'];
}
?>