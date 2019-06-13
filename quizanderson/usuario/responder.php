<!DOCTYPE html>
 <html>
 <head>
 	<title>responder_php</title>
 </head>
 <body>

 <?php 
	session_start();
	$nome = $_GET["nome"];
	$_SESSION["nome"] = "$nome";  

	echo "Olá ".$_SESSION["nome"]. " seja bem vindo(a)!";

	?>

	<form action="questionario.php">

	<h2>Qual a disciplina do questinário?</h2>
	POO<input type="radio" name="disciplina" value="POO"><br>
	algoritmos<input type="radio" name="disciplina" value="algoritmos"><br>
	estrutura de dados<input type="radio" name="disciplina" value="estrutura de dados"><br>
	engenharia de software<input type="radio" name="disciplina" value="engenharia de software"><br>
	conceitos de programacao<input type="radio" name="disciplina" value="conceitos de programacao"><br><br>
	
	<input type="submit" value="ir para questionario">

	</form>

<!-- <?php
$conexao = mysqli_connect("localhost", "root","","quiz");

$sql = "SELECT * FROM questoes";

$resultado = mysqli_query($conexao, $sql);
?>

<h1>Perguntas</h1>
<table>
	<?php while($linha = mysqli_fetch_assoc($resultado)): ?>
	<tr>

		<td><?=$linha["pergunta"];?></td>

		<td><?=$linha["disciplina"];?></td>		

		
	</tr>
	<?php endwhile; ?>
</table>
<hr> 

?> -->
 </body>
 </html> 