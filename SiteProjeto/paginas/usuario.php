<?php
	$usuario = $_POST ["ajaxUsuario"];
	$senha = $_POST ["ajaxSenha"];

	$xml = new DOMDocument ("1.0");

	$xmlDados = $xml->createElement("dados");
	$xmlUsuario = $xml->createElement ("usuario", $usuario);
	$xmlSenha = $xml->createElement ("senha", $senha);

	$xmlDados-> setAttribute ("dono");
	$xmlDados-> setAttribute ("0101");


	$xmlDados-> appendChild ($xmlUsuario);
	$xmlDados-> appendChild ($xmlSenha);

	$xml->appendChild($xmlDados);

	$xml->save("dados.xml");

	echo json_encode("xml criado!");
?>