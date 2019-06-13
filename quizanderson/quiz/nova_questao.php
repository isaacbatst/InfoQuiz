<!DOCTYPE html>
<html>
<head>
	<title>Listar_Questões</title>
    <meta charset="UTF-8">
</head>
<body>
   <h1>Nova Questão</h1>
   <form action="salvar_questoes.php" method="post">
   	Pergunta:
   	<input type="text" name="pergunta"> <br><br>
   	Alternativa a):
   	<input type="text" name="alternativa_a"><br><br>
   	Alternativa b):
   	<input type="text" name="alternativa_b"><br><br>
   	Alternativa c):
   	<input type="text" name="alternativa_c"><br><br>
   	Alternativa d):
   	<input type="text" name="alternativa_d"><br><br>
      Disciplina:
      <input type="text" name="disciplina"><br><br>
      Alternativa Correta:
    A<input type="radio" name="alternativa_correta" value="a">
    B<input type="radio" name="alternativa_correta" value="b">
    C<input type="radio" name="alternativa_correta" value="c">
    D<input type="radio" name="alternativa_correta" value="d"><br><br>
      <input type="submit" value="Salvar">
   </form>
   </form>
</body>
</html>