<!DOCTYPE html>
<html>
<head>
	<title>Deletar Produto</title>

</head>
<body>
	<?php
		include_once 'listar.php';

	?><br><br>
	<form method="POST" action="excluir.php">
		Digite o nome do produto que deseja deletar :<input type="text" name="delet" id="delet">
				<p><input type="submit" name="Deletar" value="deletar"></p>


	</form>
</body>
</html>