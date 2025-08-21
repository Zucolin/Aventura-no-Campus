<?php
	session_start();

	// Se não existir ainda, cria as variáveis de sessão
	if (!isset($_SESSION['pontos'])) {
		$_SESSION['pontos'] = 0;
	}
	if (!isset($_SESSION['inicio_fase1'])) {
		$_SESSION['inicio_fase1'] = time();
	}

	// Pontuação máxima da fase
	$pontos_maximos = 100;

	// Tempo decorrido desde que a fase começou
	$tempo_decorrido = time() - $_SESSION['inicio_fase1'];

	// Penalidade: perde 1 ponto por segundo
	$pontos_ganhos = $pontos_maximos - $tempo_decorrido;

	// Evita pontuação negativa
	if ($pontos_ganhos < 0) {
		$pontos_ganhos = 0;
	}

	// Soma ao total do jogador
	$_SESSION['pontos'] += $pontos_ganhos;

	// Marca a fase como concluída
	$_SESSION['fase1_concluida'] = true;

	// Retorna resposta em JSON (para o fetch do JS)
	echo json_encode([
		"status" => "ok",
		"pontos_ganhos" => $pontos_ganhos,
		"total" => $_SESSION['pontos']
	]);
?>/		