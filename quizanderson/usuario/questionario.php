 <?php
 	// Montar sessão
	session_start();

 	// Montar a consulta
	$_SESSION["nome"] = $_GET["nome"];
 	$quantidade = $_GET["quantidade"];
 	
 	

	echo "Olá ".$_SESSION["nome"]. " seja bem-vindo(a) ao Super Quiz! <br> <br>";

	$conexao = mysqli_connect("localhost", "root","","quiz");

 	$sql = "SELECT pergunta, alternativa_a, alternativa_b,alternativa_c, alternativa_d, alternativa_correta FROM questoes ORDER BY RAND() LIMIT $quantidade";

 	$resultado = mysqli_query($conexao, $sql);
 	//$linha = mysqli_fetch_row($resultado); O erro era causado por essa linha. quando eu comentei, parou de dar erro!!!!!
 	if(mysqli_query($conexao, $sql)){
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<style type="text/css">
			body{
			background-color: lightblue;
			font-size: 20px;
			text-align: left;
			font-family: sans-serif; 
		}

			img{
		 	width: 550px; 
		 	height: 550px;
		 	align: center;

		}
		</style>
		<body>
		<img src="questionboy.png">
		<form action="calcular_resultado.php" method="post">
			<input type="hidden" name="quantidade"  value="<?=$quantidade?>">
			
			<?php
		 	$i = 1;

		 	while($linha = mysqli_fetch_assoc($resultado)): ?>	

			<tr>
				<td>
					<?=$i.") ".$linha["pergunta"];?></td><br>
					A)<input   type="radio"  name="alternativa_<?=$i?>" value="a"> <?=$linha["alternativa_a"];?><br>
					B)<input   type="radio"  name="alternativa_<?=$i?>" value="b"> <?=$linha["alternativa_b"];?><br>
					C)<input   type="radio"  name="alternativa_<?=$i?>" value="c"> <?=$linha["alternativa_c"];?><br>
					D)<input   type="radio"  name="alternativa_<?=$i?>" value="d"> <?=$linha["alternativa_d"];?><br>
					  <input   type="hidden" name="alternativa_correta_<?=$i?>" value="<?=$linha["alternativa_correta"];?>"><br>
					
					
				</td>
			</tr><br><br>
					
		<?php 
				$i = $i + 1;
			endwhile; 
		?>


			<input type="submit" value="Responder">

		</body>
		</html>

		</form>
	<?php

	} else {echo "erro na conexão com o banco";}