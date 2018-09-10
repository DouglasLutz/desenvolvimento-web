<!DOCTYPE html>
<html>
<head>
	<title>Votação</title>
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
				<th>Vice</th>
				<th>Número</th>
				<th>Sigla</th>
				<th>Partido/Coligação</th>
			</thead>

			<?php foreach(glob("files/*") as $filePath):
				$file = file($filePath);

				$nome = basename($filePath, ".txt");
				$vice = trim($file[0]);
				$numero = trim($file[1]);
				$sigla = trim($file[2]);
				$partido = trim($file[3]); ?>

				<tr>
					<td><?=$nome?></td>
					<td><?=$vice?></td>
					<td><?=$numero?></td>
					<td><?=$sigla?></td>
					<td><?=$partido?></td>
				</tr>
			<?php endforeach; ?>
		</table>

		<br>
	
		<table class="table">
			<thead class="thead-dark">
				<th>Votação</th>
				<th></th>
			</thead>
			<form method="POST" action="votar.php">
				<tr>
					<td>Número do canditato: </td>
					<td>
						<input class="form-control" type="number" name="numero">	
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary form-control" type="submit" value="Votar"></td>
				</tr>
			</form>	
		</table>
	</div>
</body>