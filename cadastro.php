<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Produtos</title>
	<meta charset="utf-8">
	<style>
	body{
	background-color:#1e272e;
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}



.box{
	width: 300px;
	padding: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	background: rgba( 0, 0, 0, 0.6);;
	text-align: center;
	border-radius: 10px;
}
.box h1{
	color: white;
	text-transform: uppercase;
	font-weight: 500;
}
.box input[type = "text"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 25px;
	transition: 0.35s;


}
img{
	margin-top: 15px;
	margin-left: 10px;
}
a{
	color: #2ecc71;
	font-size: 10px;
}
.box input[type = "text"]:focus{
	width: 280px;
	border-color: #2ecc71;
}
.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 25px;
	transition: 0.25s;
	cursor: pointer;

}
.box input[type="submit"]:hover{
	background: #2ecc71;
}
h4{
	color: white;


}
button{
	margin-left: 925px;
	margin-top: 90px;
	width: 90px;
	height: 50px;

}


	</style>


</head>
<body>

			<button><a href="listar.php"> Listar</a></button>




	<form  method="POST" action="Cadastrar.php" class="box">
		<h1>Cadastro de Produtos</h1>

		<h4>Codigo : </h4><input type="text" name="cod" id="cod" size="10"><br>
		<h4>Nome : </h4><input type="text" name="name" id="name" size="30"><br>
		<h4>Valor : </h4><input type="text" name="value" id="value" size="3">

			<p><input type="submit" name="enviar" value="Cadastrar"></p>
			

	</form>

</body>
</html>