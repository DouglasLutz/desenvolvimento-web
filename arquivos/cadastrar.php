<?php
	$nome = $_POST["nome"];
	$vice = $_POST["vice"];
	$numero = $_POST["numero"];
	$sigla = $_POST["sigla"];
	$partido = $_POST["partido"];

	$arquivo = fopen("files/" . $nome . ".txt", "w");
	fwrite($arquivo, $vice . "\n" . $numero . "\n" . $sigla . "\n" . $partido);

	$arquivoVotacao = fopen("votacao/" . $numero . ".txt", "w");
	fwrite($arquivoVotacao, "0");

	header("Location: candidato.php");
	die();
?>
