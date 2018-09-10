<?php
	$nome = $_POST["nome"];
	$path = glob("files/*" . $nome . "*.txt")[0];

	$arquivo = file($path);
	$nome = basename($path, ".txt");

	$vice = trim($arquivo[0]);
	$numero = trim($arquivo[1]);
	$sigla = trim($arquivo[2]);
	$partido = trim($arquivo[3]);

	
	$urlComParametros = "nome=" . $nome . "&vice=" . $vice . "&numero=" . $numero . "&sigla=" . $sigla . "&partido=" . $partido;


	header("Location: candidato.php?" . $urlComParametros);
	die();
?>