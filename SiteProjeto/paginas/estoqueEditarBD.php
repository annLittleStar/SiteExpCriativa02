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
		.w3-theme {color:#ffff !important;background-color: royalblue !important}
		.w3-code{border-left:4px solid royalblue}
		.myMenu {margin-bottom:150px}
	</style>
</head>
<body onload="w3_show_nav('menuEstoque')">
	<!-- Inclui MENU.PHP  -->
	<?php require 'menu.php'; ?>

	<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
	<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

		<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
			<h1 class="w3-xxlarge">Editar Dados do Pneu</h1>

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

					$id      = $_POST['Id'];
					$nome    = $_POST['Nome'];
					$marca   = $_POST['Marca'];
					$valor	 = $_POST['Venda'];

					// Faz Select na Base de Dados
					if($valor > 0 && $nome != null && $marca != null){
						$sql = "UPDATE produto SET precoProd='$valor', nomeProd='$nome', marcaProd='$marca'
						WHERE idProd=$id";
					}else{
						$sql = "UPDATE produto SET idProd='$id' WHERE idProd=$id";
					}

					echo "<div class='w3-responsive w3-card-4'>";


					if ($result = mysqli_query($conn, $sql) && $valor > 0 || $nome != null || $marca != null) {
						echo "Informações do produto atualizados!";
					}else if ($result = mysqli_query($conn, $sql) && $valor < 0 && $nome == null && $marca == null) {
						echo "Não foi possível atualizar as informações dos produtos";
					}else {
						echo "Erro executando UPDATE: " . mysqli_error($conn);
					}
					echo "</div>";
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
