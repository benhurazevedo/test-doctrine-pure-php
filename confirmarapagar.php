<?php 
require_once "bootstrap.php";
require_once "src/Telefone.php";

$telefone = $entityManager->find('Telefone', $_POST["id"]);
if($telefone == null)
	die("Telefone não encontrato");
$entityManager->remove($telefone);
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
		<h1>Telefone apagado com sucesso!</h1>
		<a href="listatelefonica.php">Voltar para a lista</a>
	</body>
</html>