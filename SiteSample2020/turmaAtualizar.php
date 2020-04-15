<!DOCTYPE html>
<!--
Desenvolvimento Web
PUCPR
SEA+
Abril/2020
-->
<html>
<head>

    <title>AP - AKIM PNEUS</title>
    <link rel="icon" type="image/png" href="imagens/IE_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-theme {
            color: #ffff !important;
            background-color: #ADD8E6 !important
        }

        .w3-code {
            border-left: 4px solid #ADD8E6
        }

        .myMenu {
            margin-bottom: 150px
        }
    </style>
</head>
<body onload="w3_show_nav('menuTurma')">
<!-- Inclui MENU.PHP  -->
<?php require 'menu.php'; ?>

<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Registro de Serviço</h1>

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
				
				$servername = "localhost:3306";
				$username = "root";
				$password = "";
				$database = "IE_Exemplo";
				$id=$_GET['id'];
				
				// Cria conexão
				$conn = mysqli_connect($servername, $username, $password, $database);

				// Verifica conexão
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				// Configura para trabalhar com caracteres acentuados do português
				mysqli_query($conn,"SET NAMES 'utf8'");
				mysqli_query($conn,"SET NAMES 'utf8'");
				mysqli_query($conn,'SET character_set_connection=utf8');
				mysqli_query($conn,'SET character_set_client=utf8');
				mysqli_query($conn,'SET character_set_results=utf8');
				// Faz Select na Base de Dados
				$sql  = "SELECT t.codTurma, t.CodProfessor, t.codDisc, t.ano, t.semestre FROM Turma as t WHERE codTurma = $id ";
				$sqlD = "SELECT CodDisciplina, NomeDisc, Ementa FROM Disciplina";
				$sqlP = "SELECT CodProfessor, Nome FROM professor";
				if ($result = mysqli_query($conn, $sql)) {
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$codTurma = $row['codTurma'];
							$ano      = $row['ano'];
							$sem      = $row['semestre'];
							$codProf  = $row['CodProfessor'];
							$codDisc  = $row['codDisc'];

						}
						$sem1Checked = "  ";
						$sem2Checked = "  ";
						if ($sem == '1') $sem1Checked = " checked ";
						if ($sem == '2') $sem2Checked = " checked ";
						$optionsDisc = array();
						$optionsProf = array();
						
						echo "<div class='w3-responsive w3-card-4'>";
						//Obtém lista de disciplinas
						if ($result = mysqli_query($conn, $sqlD)) {
							while ($row = mysqli_fetch_assoc($result)) {
								$selected = "";
								if ($row['CodDisciplina'] == $codDisc)
									$selected = "selected";
							   array_push($optionsDisc, "\t\t\t<option " . $selected . " value='". $row["CodDisciplina"]."'>".$row["NomeDisc"]."</option>\n");
							}
						}
						//Obtém lista de professores
						if ($result = mysqli_query($conn, $sqlP)) {
							while ($row = mysqli_fetch_assoc($result)) {
								$selected = "";
								if ($row['CodProfessor'] == $codProf)
									$selected = "selected";
								array_push($optionsProf, "\t\t\t<option " . $selected . " value='". $row["CodProfessor"]."'>".$row["Nome"]."</option>\n");
							}
						}
						echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
						if ($result = mysqli_query($conn, $sql)) {
								if (mysqli_num_rows($result) > 0) {
								// Apresenta cada linha da tabela
									while ($row = mysqli_fetch_assoc($result)) {
						?>				
										<div class="w3-container w3-theme">
											<h2>Registrar Servico = [<?php echo $codTurma; ?>]</h2>
										</div>
										<form class="w3-container" action="TurmaAtualizar_exe.php" method="post" onsubmit="return check(this.form)">
											<input type="hidden" id="Id" name="Id" value="<?php echo $codTurma; ?>">
											<p><label class="w3-text-deep-purple"><b>Tipo</b></label>
												<select name="codProf" class="w3-input w3-border" required>
													<option value=""></option>
												<?php
													foreach($optionsProf as $key => $value){
														echo $value;
													}
												?>
											</select></p>
											<p>	<label class="w3-text-deep-purple"><b>Funcionário</b></label>
												<select name="codDisc" class="w3-input w3-border" required>
													<option value=""></option>
												<?php
													foreach($optionsDisc as $key => $value){
														echo $value;
													}
												?>
												</select></p>
											<p>
												<label class="w3-text-deep-purple"><b>Ano</b></label>
												<input class="w3-input w3-border w3-light-grey" name="Ano" type="text" maxlength="4" size="4" pattern="(20)\d\d"
													   title="Ano com 4 dígitos, a partir de 2000" value="<?php echo $row['ano']; ?>" required></p>
											<p>
												<label class="w3-text-deep-purple"><b>Valor</b></label></br>
												<input class="w3-radio" type="radio" name="Semestre" value="1" required <?php echo $sem1Checked; ?> ><label class="w3-text-deep-purple"><b>15.00</b></label>
												<input class="w3-radio" type="radio" name="Semestre" value="2" required <?php echo $sem2Checked; ?> ><label class="w3-text-deep-purple"><b>30.00</b></label></p>
												<input class="w3-radio" type="radio" name="Semestre" value="3" required <?php echo $sem3Checked; ?> ><label class="w3-text-deep-purple"><b>20.00</b></label></p>
											<p>
											<input type="submit" value="Registrar" class="w3-btn w3-theme" >
											<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='turmaListar.php'"></p>
										</form>

					<?php 
									}
								}
							}
					}
				}
				else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
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
            <a class="w3-button w3-theme w3-hover-white"
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
