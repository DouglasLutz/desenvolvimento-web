<?php
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];

	$xml = simplexml_load_file("pessoas.xml");
	
	$pessoa = $xml->addChild('pessoa');
	
	$pessoa->addChild('nome', $nome);
	$pessoa->addChild('idade', $idade);
	$pessoa->addChild('email', $email);
	
	file_put_contents('pessoas.xml', $xml->asXML());
	header("Location: /projetos-aula/xml");
	die();