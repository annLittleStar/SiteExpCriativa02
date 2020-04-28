  <?php

	$xmlString = file_get_contents("dados.xml");

	$xmlObjeto = simplexml_load_string($xmlString);

	$retorno["usuario"] = trim($xmlObjeto->usuario);
	$retorno["senha"] = trim($xmlObjeto->senha);

	echo json_encode($retorno);

?>