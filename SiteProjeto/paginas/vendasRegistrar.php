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
<body onload="w3_show_nav('menuServicos')">

<!-- Inclui MENU.PHP  -->
<?php require 'menu.php';?>

<!-- Conteúdo Principal: deslocado paa direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Registrar Venda de Pneu</h1>

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
                $sql = "SELECT * FROM produto WHERE idProd = $id";
                
                echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
                 if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {


                        // Apresenta cada linha da tabela:
                            while ($row = mysqli_fetch_assoc($result)) {
                ?>              
                    <div class="w3-container w3-theme">
                        <h2>Informe os dados da Venda</h2>
                    </div>
                    <form class="w3-container" action="vendasRegistrarBD.php" method="post" onsubmit="return check(this.form)">
						<input type="hidden" id="acaoForm" name="acaoForm" value="Cada">
                        <p>
                        <input type="hidden" id="acaoForm" name="acaoForm" value="Cada">
                        <p>
                        <label class="w3-text-deep-purple"><b>ID Venda</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="idV" type="text" pattern="[0-9]{1,3}" title="Id da venda."></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Data</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="data" type="text" value="<?php $dataA = date("Y/m/d H:i:s", time()); echo "$dataA" ?>" title="Data de inicio do registro." required readonly=""></p>

                        <p>
                        <label class="w3-text-deep-purple"><b>ID Pneu</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="idP" type="text" pattern="[0-9]{1,3}" title="ID do Produto." value="<?php echo "$id" ?>" required readonly></p>
                        <input type="hidden" name="valor" value="<?php echo $row['precoProd']; ?>">
                        <input type="hidden" name="qtd" value="<?php echo $row['quantidadeProd']; ?>">
                        <p>
                        <label class="w3-text-deep-purple"><b>Quantidade Vendida</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="Vender" type="text" pattern="[0-9]{1,3}" title="Quantidade Vendida." value="" required></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Funcionario</b></label>
                        <br>
                        <?php
                            $sql = "SELECT * FROM funcionario";
                            echo "<select class='w3-input w3-border w3-light-grey' name='funcVenda' style='width:40%; height:4.5%'>";
                            if ($result = mysqli_query($conn, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "";
                                        echo "<option value=";
                                        echo $row["id"];
                                        echo ">";
                                        echo $row['nome'];
                                        echo "</option>";
                                        }
                                    }
                                }
                            echo "</select>";
                        ?>
                        </p>
                        <p>
						<input type="submit" value="Registrar" class="w3-btn w3-green" >
						<input type="button" value="Cancelar" class="w3-btn w3-red" onclick="window.location.href='vendasListarPneu.php'"></p>
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
