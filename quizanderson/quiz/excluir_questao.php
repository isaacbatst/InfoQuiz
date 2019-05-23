<?php
$id = $_GET["id"];

$conexao = mysqli_connect("localhost", "root","","quiz");

$sql = "DELETE FROM questoes WHERE idquestao = '$id'";

mysqli_query($conexao, $sql);

header("location: listar_questoes.php");
?>