<?php
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];

	$xml = simplexml_load_file("pessoas.xml");
	foreach($xml->pessoa as $pessoa):
		if($pessoa->$tipo == $valor):
			echo "<h2>";
			echo "Nome: " . $pessoa->nome . "<br>";
			echo "Idade: " . $pessoa->idade . "<br>";
			echo "Email: " . $pessoa->email . "<br>";
		endif;
	endforeach;
