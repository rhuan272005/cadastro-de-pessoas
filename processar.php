
<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone']; 


echo "nome: $titulolivro <br>";
echo "email: $nomeautor <br>";
echo "ddd: $ddd <br>";
echo "telefone: $telefone <br>";


$sql_gravar = mysqli_query($conexao, "INSERT INTO cadastro_pessoas (nome, email, ddd, telefone) VALUES ('$nome', '$email', '$ddd', '$telefone')");

?>