<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>
	<form method="POST" action="carregaPessoaXML.php">
		<label for="valor">Valor: </label>
		<input type="text" name="valor" >

		<select name="tipo">
			<option value="nome">Nome</option>
			<option value="idade">Idade</option>
			<option value="email">Email</option>
		</select>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>