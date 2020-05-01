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

if(empty($_POST['login']) || empty($_POST['senha'])){
	header('Location: login.html');
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, login from funcionario where login = '{$login}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['login'] = $login;
	header('Location: index.php');
	exit;
}else{
	header('Location: login.html');
}

?>
