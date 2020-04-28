<?php

	$xml_string = file_get_contents("../xml/usuarios/dono/dadosLogin.xml");

	$xml_objeto = simplexml_load_string($xml_string);

	$u = $xml_objeto->usuario;
	$s = $xml_objeto->senha;

	$usuario = $_POST["user"];
	$senha = $_POST["pass"];

	if ($usuario == $u && $senha == $s) {
			$retorna["resultado"] = "valido";

	}else {
		$retorna["resultado"] = "invalido";
	}

	$retorna_json = json_encode($retorna);
	echo $retorna_json;

?>