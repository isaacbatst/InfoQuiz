<!DOCTYPE html>
<html>
<head>
	<title>login de usuário</title>
	<meta charset="UTF-8">
<style type="text/css">

body{
	background-color: lightblue;
	font-size: 40px;
	text-align: center;
	font-family: sans-serif; 
}

img{
 width: 550px; 
 height: 550px;
 text-align: left;

}

</style>


</head>
<body>
<img src="questionboy.png">
<h1>SUPER QUIZ</h1>
<form action="questionario.php">
	<label>Nome do aluno</label>
	<input type="text" name="nome"><br>
	<label>Quantidade</label>
	<select name="quantidade">
		<option value="5">5 questões</option>
		<option value="10">10 questões</option>
		<option value="20">20 questões</option>
	</select><br>
	<input type="submit" value="Inciar Questionário">

</form>

<hr>
<h3>Histórico de usuários</h3>
<?php
	 
	 /*$nome = $_POST["usuario"];
	 $data_hora = date('H:i:s');
	 $quantidade = $_POST["quantidade"];
	 $PorcentCertas = $_POST["porcentCertas"];
	 $porcentErradas = $_POST["porcentErradas"];

	 setcookie($nome, $data_hora, $quantidade, $PorcentCertas, $porcentErradas);*/




	/*if( ! isset($_COOKIE["nome"]) ) {
		echo "O cookie não existe!";
	} 
	else {
		echo "Olá " . $_COOKIE["historico"]. "!";
	}*/

?>
</body>
</html>