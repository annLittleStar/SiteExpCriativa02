<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "sea";

// Verifica conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica conexão 
if (!$conn) {
	echo "</table>";
	echo "</div>";
	die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

// Configura para trabalhar com caracteres acentuados do português
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');
?>