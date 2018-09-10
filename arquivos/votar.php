<?php
	$numero = $_POST['numero'];
	
	$filePathCandidato = "votacao/" . $numero . ".txt";
	$filePathTotal = "votacao/total.txt";

	if(!file_exists($filePathCandidato)){
		header("Location: voto-invalido.php");
		die();
	}

	$arquivoCandidato = file($filePathCandidato);
	$numeroVotosCandidato = $arquivoCandidato[0];

	$arquivoTotal = file($filePathTotal);
	$numeroVotosTotal = $arquivoTotal[0];
	
	$arquivoCandidato = fopen($filePathCandidato, "w");
	$arquivoTotal = fopen($filePathTotal, "w");

	fwrite($arquivoCandidato, ($numeroVotosCandidato + 1));
	fwrite($arquivoTotal, ($numeroVotosTotal + 1));

	header("Location: estatisticas.php");