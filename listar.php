<!DOCTYPE html> 
<html>
<head>
	<title>alunos</title>
</head>
<body>

     <table border="5px">
     	<tr>
     		<td>Codigo</td>
     		<td>Nome</td>
     		<td>Valor</td>
     		<td>Atualizar</td>
     		<td>Deletar</td>
     	</tr>
     	<?php 
		include_once ('conexao.php');
				
		$sql = "SELECT * FROM produto";
		$r = mysqli_query($con, $sql);
		if($r){
			while ($result = mysqli_fetch_array($r)) {?>
				<tr>
					<td><?php echo $result['codigo']; ?></td>
					<td><?php echo $result['descricao']; ?></td>
					<td><?php echo $result['preco']; ?></td>
					<td ><a href="update.php"><img src="editar.png " width="25px" height="25px" align="center"></a></td>
					<td><a href="deletar.php"> <img src="excluir.png " width="25px" height="25px" align="center"></a></td>
				</tr>

			<?php }
		}
	 ?>
     </table>
</body>
</html>