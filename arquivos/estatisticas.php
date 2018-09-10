<!DOCTYPE html>
<html>
<head>
	<title>Candidatos</title>
	<link href="reset.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="meucss.css" rel="stylesheet">
</head>

<body>
	<?php require_once("barra-nav.php"); ?>
	
	<div class="container col-md- principal">
		<table class="table table-striped">
			<thead class="thead-dark">
				<th>Nome</th>
				<th>Número</th>
				<th>Votos</th>
				<th>Percentual(%)</th>
			</thead>

			<?php 
			$fileTotal = file("votacao/total.txt");
			$totalVotos = $fileTotal[0];

			foreach(glob("files/*") as $filePath):
				$file = file($filePath);

				$nome = basename($filePath, ".txt");
				$numero = trim($file[1]);

				$fileVotos = file("votacao/" . $numero . ".txt");
				$votosCandidato = $fileVotos[0];

				if($totalVotos == 0) $percentual = 0;
				else $percentual = ($votosCandidato / $totalVotos) * 100;

				$percentual = number_format($percentual, 2, '.', '');
			?>
				<tr>
					<td><?=$nome?></td>
					<td><?=$numero?></td>
					<td><?=$votosCandidato?></td>
					<td><?=$percentual?></td>
				</tr>
			<?php endforeach; ?>

			<tr>
				<td>Total</td>
				<td></td>
				<td><?=$totalVotos?></td>
				<td>100</td>
			</tr>
		</table>
	</div>
</body>