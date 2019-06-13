<?php
$pergunta = $_POST["pergunta"];
$alternativa_a = $_POST["alternativa_a"];
$alternativa_b = $_POST["alternativa_b"];
$alternativa_c = $_POST["alternativa_c"];
$alternativa_d = $_POST["alternativa_d"];
$alternativa_correta = $_POST["alternativa_correta"];
$disciplina = $_POST["disciplina"];


$conexao = mysqli_connect("localhost", "root","","quiz");

$sql = "INSERT INTO questoes (pergunta, alternativa_a, alternativa_b, alternativa_c, alternativa_d, alternativa_correta,disciplina) VALUES ('$pergunta','$alternativa_a', '$alternativa_b', '$alternativa_c', '$alternativa_d', '$alternativa_correta','$disciplina')";

mysqli_query($conexao,$sql);

mysqli_close($conexao);

header("location: listar_questoes.php");
?>