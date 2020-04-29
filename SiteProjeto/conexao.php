<?php
define('HOST', 'localhost');
define('USER', 'root');
define('SENHA', '');
define('DB', 'sea');

$conexao = mysqli_connect(HOST, USER, SENHA, DB) or die("Erro");

?>