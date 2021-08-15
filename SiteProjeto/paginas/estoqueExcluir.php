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
	</style>
</head>
<body onload="w3_show_nav('menuEstoque')">
	<!-- Inclui MENU.PHP  -->
	<?php require 'menu.php';?>

	<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
	<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

		<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
			<h1 class="w3-xxlarge">Exclusão de Produto</h1>

			<p class="w3-large">
				<div class="w3-code cssHigh notranslate">
					<!-- Acesso em:-->
					<?php

					date_default_timezone_set("America/Sao_Paulo");
					$data = date("d/m/Y H:i:s", time());
					echo "<p class='w3-small' > ";
					echo "Acesso em: ";
					echo $data;
					echo "</p> "
					?>

					<!-- Acesso ao BD-->
					<?php
					require 'conexaoBD.php';

					$id=$_GET['id'];

				// Faz Select na Base de Dados
					$sql = "SELECT idProd, nomeProd, tipoProd FROM produto WHERE idProd = $id";
				echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
				if ($result = mysqli_query($conn, $sql)) {
					if (mysqli_num_rows($result) > 0) {


						// Apresenta cada linha da tabela
						while ($row = mysqli_fetch_assoc($result)) {
							?>
							<div class="w3-container w3-theme">
								<h2>Exclusão de Produto Cód. = [<?php echo $row['idProd']; ?>]</h2>
							</div>
							<form class="w3-container" action="estoqueExcluirBD.php" method="post" onsubmit="return check(this.form)">
								<input type="hidden" id="Id" name="Id" value="<?php echo $row['idProd']; ?>">
								<p>
									<label class="w3-text-deep-purple"><b>Nome: </b> <?php echo $row['nomeProd']; ?> </label></p>
									<p>
										<label class="w3-text-deep-purple"><b>Tipo: </b><?php echo $row['tipoProd']; ?></label></p>
										<input type="hidden" id="Tipo" name="Tipo" value="<?php 'tipoProd'; ?>">
										<p>
											<input type="submit" value="Excluir" class="w3-btn w3-red" >
											<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='estoqueListar.php'"></p>
										</form>
										<?php 
									}
								}
							}
							else {
								echo "Erro executando DELETE: " . mysqli_error($conn);
							}
				echo "</div>"; //Fim form
				mysqli_close($conn);  //Encerra conexao com o BD

				?>

			</div>
		</p>
	</div>


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
