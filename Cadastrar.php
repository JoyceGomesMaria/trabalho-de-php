<?php
include_once 'connect.php';
	
	$codigo = $_POST['cod'];
	$nome = $_POST['name'];
	$valor = $_POST['value'];


	$sql = "INSERT INTO produto (codigo,descricao,preco) VALUES ($codigo,'$nome','$valor')";
	$r = mysqli_query($con, $sql);

	if($r){
		echo "Cadastrado com Sucesso !";

	}else{
		echo "Erro ao Cadastrar";
	}

?>