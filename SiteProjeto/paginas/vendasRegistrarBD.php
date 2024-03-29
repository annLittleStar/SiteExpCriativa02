<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
<html>
<head>

	<title>SEA+</title>
	<link rel="icon" type="image/png" href="../imagens/Logo.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.w3-theme {color: #ffff !important;background-color: royalblue !important}
		.w3-code{border-left:4px solid royalblue}
		.myMenu {margin-bottom:150px}
	</style>
</head>
<body onload="w3_show_nav('menuServicos')">

	<!-- Inclui MENU.PHP  -->
	<?php require 'menu.php';?>

	<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
	<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

		<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
			<h1 class="w3-xxlarge">Registrar Venda de Pneu</h1>

			<p class="w3-large">
				<div class="w3-code cssHigh notranslate">
					<!-- Acesso em:-->
					<?php

					date_default_timezone_set("America/Sao_Paulo");
					$data = date("d/m/Y H:i:s",time());
					echo "<p class='w3-small' > ";
					echo "Acesso em: ";
					echo $data;
					echo "</p> "
					?>

					<!-- Acesso ao BD-->
					<?php
					require 'conexaoBD.php';

					$idp   		= $_POST['idP'];
					$idf   		= $_POST['funcVenda'];
					$vender		= $_POST['Vender'];
					$dataV		= $_POST['data'];
					$preco		= $_POST['valor'];
					$quantidade	= $_POST['qtd'];

					// Faz Insert na Base de Dados
					$precoT = $preco * $vender;
					$resto = $quantidade - $vender;

					if($resto>=0){
						$sql = "INSERT INTO vendaPneu (idVenda, totalVenda, dataVenda, idFuncVenda, idProdutoVenda, qtdVenda) VALUES (DEFAULT, '$precoT', '$dataV', '$idf', '$idp', '$vender')";
					}else{
						$sql = "UPDATE produto SET quantidadeProd = '$quantidade' WHERE idProd = $idp";
					}

					echo "<div class='w3-responsive w3-card-4'>";
					if ($result = mysqli_query($conn, $sql) && $resto>=0) {
						echo "Venda realizada!";
					} else if ($result = mysqli_query($conn, $sql) && !($resto>0)){
						echo "Impossivel realizar venda";
						echo "<br>";
						echo "Tentativa de vender mais produtos que o disponível";
					}else {
						echo "Erro executando INSERT: " . mysqli_error($conn);
					}
					echo "</div>";

					if($resto>=0){
						$sql = "UPDATE produto SET quantidadeProd='$resto' WHERE idProd='$idp'";

						echo "<div class='w3-responsive w3-card-4'>";
						if ($result = mysqli_query($conn, $sql)) {
						} else {
							echo "Erro executando INSERT: " . mysqli_error($conn);
						}
						echo "</div>";
					}
		mysqli_close($conn);  //Encerra conexao com o BD

		?>
	</div>
</div>


<footer class="w3-panel w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
	<p><nav>
		<a class="w3-button w3-theme w3-hover-blue" onclick="document.getElementById('id01').style.display='block'" >Sobre</a>
	</nav></p>
</footer>

<!-- FIM PRINCIPAL -->
</div>
<!-- Inclui RODAPE.PHP  -->
<?php require 'rodape.php';?>
</body>
</html>
