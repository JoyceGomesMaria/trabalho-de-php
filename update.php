<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
</head>
<body>
	<?php
		include_once 'listar.php';

	?><br><br>
	<form  action="atualizar.php" method="POST">
		Digite o codigo do produto que deseja atualizar : <input type="text" name="cod" id="cod"><br>
		Digite o novo nome do produto : <input type="text" name="prod" id="prod"><br>
		Digite o novo valor : <input type="text" name="val" id="val"><br>
		<input type="submit" value="Atualizar">
	</form>
</body>
</html>