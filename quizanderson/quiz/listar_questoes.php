<?php
$conexao = mysqli_connect("localhost", "root","","quiz");

$sql = "SELECT * FROM questoes";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body>
<h1>Perguntas</h1>
<table>
	<?php while($linha = mysqli_fetch_assoc($resultado)): ?>
	<tr>
		<td><?=$linha["pergunta"];?></td>
		<td><?=$linha["disciplina"];?></td>		
		<td><a href="excluir_questao.php?id=<?=$linha['idquestao'];?>">Excluir</a></td>
		<td><a href="edicao_questao.php?id=<?=$linha['idquestao'];?>">Alterar</a></td>
	</tr>
	<?php endwhile; ?>
</table>
<hr>
<a href="nova_questao.php">Nova Questão</a>
</body>
</html>
<?php
mysqli_close($conexao);
?>