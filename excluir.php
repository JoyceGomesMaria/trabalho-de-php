<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "produtos";


$con = mysqli_connect($host, $user, $pass, $db);

$nome = $_POST['delet'];
$sql = "DELETE FROM produto WHERE descricao= '$nome' "; 

$r = mysqli_query($con, $sql);

	if($r){
		echo "Deletado com Sucesso !";
	}else{
		echo "Erro ao Deletar";
	}
?>