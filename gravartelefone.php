<?php 
require_once "bootstrap.php";
require_once "src/Telefone.php";

$objTelefone = new Telefone();
$objTelefone->setNome($_POST["nome"]);
$objTelefone->setTelefone($_POST["telefone"]);
$entityManager->persist($objTelefone);
$entityManager->flush();
?>
<!doctype html>
<html lang="pt-br">

	<head>
	  <meta charset="utf-8">
	  <title>Lista telefônica</title>
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<h1>Telefone incluído com sucesso!</h1>
		<a href="listatelefonica.php">Voltar para a lista</a>
	</body>
</html>