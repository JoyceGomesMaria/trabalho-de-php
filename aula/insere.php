<?php 
include_once 'conect.php';
     $nome = $_POST['nome'];
     $preco = $_POST['c'];
     $produto = $_POST['p'];
	$cad = mysqli_query($con,"INSERT INTO cliente (nome, preco, produto)VALUES ('$nome','$preco','$produto')");
	if($cad){
		header('location:index.php');
	}else{
		echo "Erro ao cadastrar";
	}
	mysqli_close($con);

 ?>