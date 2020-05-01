<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
<?php
define('HOST', 'localhost');
define('LOGIN', 'root');
define('SENHA', '');
define('DB', 'sea');

$conexao = mysqli_connect(HOST, LOGIN, SENHA, DB) or die("Erro");

?>