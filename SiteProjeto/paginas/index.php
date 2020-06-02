<html lang="pt">
<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
	<title>SEA+</title>
	<link rel="icon" type="image/png" href="../imagens/logoReduzida.png" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.w3-theme {
			color: #ffff !important;
			background-color: royalblue !important
		}

		.w3-code {
			border-left: 4px solid royalblue
		}

		.myMenu {
			margin-bottom: 150px
		}

		.myFont {
			font-max-size: 8px
		}
	</style>

	<body  onload="w3_show_nav('menuSeaPlus')">

		<!-- Inclui MENU.PHP  -->
		<?php require 'menu.php'; ?>


		<!-- Conteúdo PRINCIPAL: deslocado para direita em 270 pixels quando a sidebar é visível -->
		<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

			<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
				<h2 class="w3-jumbo">Sistema de Estoque Automático</h2>
				<p class="w3-xlarge">Gerenciador de Serviços</p>
				<p class="w3-xlarge">Gerenciador de Clientes e Funcionários</p>


				<img src="../imagens/estoque.png" class="w3-square" width="12%" height="18%">
				<img src="../imagens/nota.png" class="w3-square"  width="13%" height="19%">
				<img src="../imagens/grafico.png" class="w3-square"  width="12%" height="19%">
				</div>
				<div>
				
				<footer class="w3-panel w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
					<p>
						<nav>
							<a class="w3-button w3-theme w3-hover-blue"
							   onclick="document.getElementById('id01').style.display='block'">Sobre</a>
						</nav>
					</p>
				</footer>

		<!-- FIM PRINCIPAL -->
			</div>

		<!-- Inclui RODAPE.PHP  -->
		<?php require 'rodape.php';?>
	</body>
</html>