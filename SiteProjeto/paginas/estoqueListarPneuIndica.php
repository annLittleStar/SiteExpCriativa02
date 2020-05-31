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
<?php require 'menu.php'; ?>


<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Pneus Recomendados</h1>

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

				// Faz Select na Base de Dados
            $sql = "SELECT nomeCarro, marcaCarro, modelo, quantidadeProd FROM ((carro JOIN pneu ON carro = idCarro)  JOIN produto ON disponibilidade = idProd) WHERE carro = $id" ;

            echo "<div class='w3-responsive w3-card-4'>";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {

                        // Apresenta cada linha da tabela:
                    if ($row = mysqli_fetch_assoc($result)) {
                ?>              

                        <div class="w3-container w3-theme">
                            <h2>Melhores Pneus para  [<?php echo $row['marcaCarro']; ?> 
                            <?php echo $row['nomeCarro']; ?>]</h2>
                        </div>

            <?php 
                    }
                }
            }            

            echo "<div class='w3-responsive w3-card-4'>";
            if ($resulta = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($resulta) > 0) {

                        // Apresenta cada linha da tabela:
                    while ($row = mysqli_fetch_assoc($resulta)) {
                ?>
                                
                        <form class="w3-container" action="estoqueListarPneuBD.php" method="post" onsubmit="return check(this.form)">
                        <table>
                        <tr>
                            <td style="width:100%"><p>
                        
                            
                                <label class="w3-text-deep-purple"><b>Modelo</b></label>
                                <input style="width:60%" class="w3-input w3-border w3-light-grey" name="Nome" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$" value="<?php echo $row['modelo']; ?>" required readonly></p></td>
                        <td style="width:18%" text-align="center"><p>
                        <label class="w3-text-deep-purple"><b>Quantidade em estoque</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="Nome" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$" value="<?php echo $row['quantidadeProd']; ?>" required readonly></p></td>
                        </table>
                                         <?php 
                        }
                    }
                } else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
				}
				?>
												<p>
								<!--	<input type="submit" value="Acessar Estoque" class="w3-btn w3-green" onclick= "window.location.href='estoqueListar.php'"> -->

									<input type="button" value="Voltar" class="w3-btn w3-theme" onclick="window.location.href='estoqueListarPneu.php'"></p>
								</form>
			<?php 
				echo "</div>"; //Fim form
				mysqli_close($conn);  //Encerra conexao com o BD
			?>

			</div>
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