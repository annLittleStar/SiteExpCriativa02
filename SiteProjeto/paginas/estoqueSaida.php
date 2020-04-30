<!DOCTYPE html>
<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->

<!--Tem varias coisas a se arrumar aqui ainda-->

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
<?php require 'menu.php'; ?>


<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Registrar Saída de Produto</h1>

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
				$database = "SEA";
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



				//Ajustar essa parte ao BD do projeto:

				// Faz Select na Base de Dados
				$sql = "SELECT id, nome, tipo, quantidade FROM produto WHERE id = $id";
				echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
				 if ($result = mysqli_query($conn, $sql)) {
						if (mysqli_num_rows($result) > 0) {


						// Apresenta cada linha da tabela:
							while ($row = mysqli_fetch_assoc($result)) {
				?>				
								<!-- O exemplo eh da alteração dos dados de uma disciplina, 
								mas para o projeto precisa ser o Formulário de Saída de Produtos-->
								<div class="w3-container w3-theme">
									<h2>Insira a quantidade a ser removida. = [<?php echo $row['id']; ?>]</h2>
								</div>
								<form class="w3-container" action="estoqueSaidaBD.php" method="post" onsubmit="return check(this.form)">
									<input type="hidden" id="Id" name="Id" value="<?php echo $row['id']; ?>">
									<p>
										<!--Arrumar isso para evitar que sejam alteradas as informações-->
									<label class="w3-text-deep-purple"><b>Nome</b></label>
									<input class="w3-input w3-border w3-light-grey" name="Nome" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$"
										   title="Nome da disciplina entre 4 e 100 letras." value="<?php echo $row['nome']; ?>" required></p>
									<p>
									<label class="w3-text-deep-purple"><b>Tipo</b></label>
									<input class="w3-input w3-border w3-light-grey" name="Tipo" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$"
										   title="Nome da disciplina entre 4 e 100 letras." value="<?php echo $row['tipo']; ?>" required></p>
<!--									<textarea class="w3-input w3-border w3-light-grey " name="tipo"  rows="5" title="Texto Descritivo" required><?php echo $row['tipo']; ?></textarea>
-->									
									<p>
									<label class="w3-text-deep-purple"><b>Quantidade</b></label>
									<input class="w3-input w3-border w3-light-grey" name="Quantidade" type="text" pattern="[0-9]{1,3}"
										   title="Quantidade de itens." value="<?php echo $row['quantidade']; ?>" required></p>
									<p>
									<input type="submit" value="Alterar" class="w3-btn w3-red" >
									<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='estoqueListar.php'"></p>
								</form>
			<?php 
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
