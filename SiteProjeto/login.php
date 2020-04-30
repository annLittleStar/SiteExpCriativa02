<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
<?php
session_start();
include('conexao.php'); 

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: login.html');
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, login from funcionario where login = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: paginas/index.php');
	exit;
}else{
	header('Location: login.html');
}

 ?>

