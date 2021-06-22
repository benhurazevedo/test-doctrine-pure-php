<?php 
require_once "bootstrap.php";
require_once "src/Telefone.php";

$telefone = $entityManager->find('Telefone', $_GET["id"]);
if($telefone == null)
	die("Telefone não encontrato");
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
		<h1>Telefone</h1>
		<dl>
			<dt>Id</dt>
			<dd><?=$telefone->getId();?></dd>
			<dt>Nome</dt>
			<dd><?=$telefone->getNome();?></dd>
			<dt>Telefone</dt>
			<dd><?=$telefone->getTelefone();?></dd>
		</dl>
		<a href="listatelefonica.php">Voltar</a>
	</body>
</html>