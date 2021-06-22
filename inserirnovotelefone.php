<!doctype html>
<html lang="pt-br">

	<head>
	  <meta charset="utf-8">
	  <title>Lista telefônica</title>
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<h1>Inserir telefone</h1>
		<form method="post" action="gravartelefone.php">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome"><br>
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" id="telefone"><br>
			<input type="reset" value="limpar">
			<input type="submit" value="enviar">
		</form>
		<p><a href="listatelefonica.php">Voltar</a></p>
	</body>
</html>