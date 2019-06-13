<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
body{
	background-color: lightblue;
	font-size: 20px;
	text-align: center;
	font-family: sans-serif; 
}

img{
 width: 550px; 
 height: 550px;
 text-align: left;

}
</style>
<body>


<?php

  	$corretas = 0;
  	$erradas = 0;
 	$quantidade = $_POST["quantidade"];
	$i = 1;
  
  	while ($i <= $_POST["quantidade"]){	

		if($_POST["alternativa_$i"] == $_POST["alternativa_correta_$i"]){
		$corretas = $corretas + 1;
		
		}
	

		if($_POST["alternativa_$i"] != $_POST["alternativa_correta_$i"]){
		$erradas = $erradas + 1;


		}	

		echo "Questão $i: Valor respondido = ". $_POST["alternativa_$i"].", resposta correta = ". $_POST["alternativa_correta_$i"]."<br>";

		$i = $i + 1;  	

		setcookie("Historico");

  	}





echo "Acertou ". $corretas. " questões!  "; 
echo "Errou ". $erradas. " questões!<br>";


$porcentCertas = ($corretas * 100) / $_POST["quantidade"]; 
$porcentErradas = ($erradas * 100) / $_POST["quantidade"];


echo "Porcentagem de acertos = " . $porcentCertas . "% <br>";
echo "Porcentagem de erros = " . $porcentErradas . "% <br>";
echo 'Data:       '. date('d-m-Y') ."| Hora: ";
echo date('H:i:s').'<br />';

if (isset($_COOKIE["qtd"])){

	echo "O histórico total de visitas é:" . $_COOKIE["qtd"] . "vez(es).";

	setcookie("qtd", $_COOKIE["qtd"] + 1);

}else{

	echo "Esse é o seu primeiro acesso a esta página!";

	setcookie("qtd", 1);
}



?> 




<img src="questionboy.png">

<form action="login_usuario.php">

<input type="submit" value="voltar ao inicio">

</form>

</body>
</html>

