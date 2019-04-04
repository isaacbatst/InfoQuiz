<?php
$id = $_GET["id"];

$conexao = mysqli_connect("localhost", "root","","quiz");

$sql = "SELECT * FROM questoes WHERE idquestao ='$id'";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_row($resultado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>QUIZ</title>
  <meta charset="UTF-8">
</head>
<body>
   <h1>Edição</h1>
   <form action="editar_questao.php" method="post">
    <input type="hidden" name="idquestao" value="<?=$linha[0];?>">
   	Pergunta:
   	<input type="text" name="pergunta" value="<?=$linha[1];?>"><br><br>
    Alternativa a):
    <input type="text" name="alternativa_a" value="<?=$linha[2];?>"><br><br>
    Alternativa b):
    <input type="text" name="alternativa_b" value="<?=$linha[3];?>"><br><br>
    Alternativa c):
    <input type="text" name="alternativa_c" value="<?=$linha[4];?>"><br><br>
    Alternativa d):
    <input type="text" name="alternativa_d" value="<?=$linha[5];?>"><br><br>
    Alternativa Correta:
    A<input type="radio" name="alternativa_correta" value="a" <?=$linha[6] == "a"?"checked":"";?>>
    B<input type="radio" name="alternativa_correta" value="b" <?=$linha[6] == "b"?"checked":"";?>>
    C<input type="radio" name="alternativa_correta" value="c" <?=$linha[6] == "c"?"checked":"";?>>
    D<input type="radio" name="alternativa_correta" value="d" <?=$linha[6] == "d"?"checked":"";?>>
    <br><br>
    Disciplina:
   	<input type="text" name="disciplina" value="<?=$linha[7];?>"><br><br>
   	
    <input type="submit" value="Alterar">
   </form>
</body>
</html>

<?php mysqli_close($conexao); 
?>