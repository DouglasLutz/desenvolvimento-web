<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="reset.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="meucss.css" rel="stylesheet">
</head>
<body>
	<?php require_once("barra-nav.php"); ?>

	<?php
		$nome = "";
		if(isset($_GET["nome"])){ 
			$nome = $_GET["nome"];
		}

		$vice = "";
		if(isset($_GET["vice"])){
			$vice = $_GET["vice"];
		}
		
		$numero = "";
		if(isset($_GET["numero"])){
			$numero = $_GET["numero"];
		}
		
		$sigla = "";
		if(isset($_GET["sigla"])){
			$sigla = $_GET["sigla"];
		}
		
		$partido = "";
		if(isset($_GET["partido"])){
			$partido = $_GET["partido"];
		}
	?>

	<div class="container col-md- principal">
		<h1>Cadastro e consulta de candidatos</h1>
		<table class="table table-striped">
			<form method="POST">
				<tr>
				    <td>Nome</td>
				    <td><input class="form-control" type="text" name="nome" value="<?=$nome?>" required></td>
				</tr>

				<tr>
					<td>Nome do vice</td>
					<td><input class="form-control" type="text" name="vice" value="<?=$vice?>" required></td>
				</tr>

				<tr>
					<td>Número</td>
					<td><input class="form-control" type="number" name="numero" value="<?=$numero?>" required></td>
				</tr>
				
				<tr>
				    <td>Sigla</td>
				    <td><input class="form-control" type="text" name="sigla" value="<?=$sigla?>" required></td>
				</tr>
				
				<tr>
				    <td>Partido/Coligação</td>
				    <td><input class="form-control" type="text" name="partido" value="<?=$partido?>" required></td>
				</tr>

				<tr>
				    <td><input class="btn btn-secondary form-control" type="submit" value="Carregar" formaction="carregar.php" formnovalidate></td>
			        <td><input class="btn btn-primary form-control" type="submit" value="Cadastrar" formaction="cadastrar.php"></td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>