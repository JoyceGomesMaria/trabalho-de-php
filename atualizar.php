<?php

include_once "conexao.php";
 
	$codig = $_POST['cod'];
	$produto = $_POST['prod'];
	$valor = $_POST['val'];
 

	$sql = "UPDATE produto SET descricao = '$produto' , preco = $valor WHERE codigo = $codig ";
	$r = mysqli_query($con,$sql);
 
if($r){

  echo "Atualizado com Sucesso!";

}else{

  echo "Aviso: Não foi atualizado !";
 
}

?>