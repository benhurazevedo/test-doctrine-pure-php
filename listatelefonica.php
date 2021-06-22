<?php 
require_once "bootstrap.php";

$telefones = $entityManager->getRepository('Telefone')->findAll();
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
		<h1>Lista Telefônica</h1>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($telefones) > 0 ) { ?>
					<?php foreach($telefones as $telefone) {?>
						<tr>
							<td><?=$telefone->getNome()?></td>
							<td><?=$telefone->getTelefone()?></td>
							<td>
								<a href="visualizardetalhes.php?id=<?=$telefone->getId()?>">Detalhes</a> | 
								<a href="apagartelefone.php?id=<?=$telefone->getId()?>">Apagar</a>
							</td>
						</tr>
					<?php } ?>
				<?php } else { ?>
					<tr>
						<td colspan="3">Não há telefones</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="inserirnovotelefone.php">Novo Telefone</a>
	</body>
</html>