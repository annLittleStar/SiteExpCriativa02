<!DOCTYPE html>
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
        input[type=submit]{
            background-color: royalblue;
            border-style: 0.1px solid;
            border-color: royalblue;
            color: white;
            padding-top: 2.7px;
            padding-bottom: 2.7px;
        }
        input[type=submit]:hover{
            background-color: lightblue;
            border-color: lightblue;
            cursor: pointer;
        }
        input[type=text]{
            border-style: 0.1px solid;
            border-color: royalblue;
            padding: 3px;
            padding-left: 2%;
        }     
    </style>
</head>
<body onload="w3_show_nav('menuEstoque')">
<!-- Inclui MENU.PHP  -->
<?php require 'menu.php'; ?>

<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Relação de Produtos em Estoque</h1>

        <p class="w3-large">
        <p>
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
            $database = "sea";
			
			// Verifica conexão
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
            //Adaptar para o projeto
            $sql = "SELECT id, nome, marca, quantidade, tipo, preco FROM produto";
            echo "<div class='w3-responsive w3-card-4'>";
            if ($result = mysqli_query($conn, $sql)) {
                echo "<table class='w3-table-all'>";
                echo "	<tr>";
                echo "	  <th width='5%'>Id</th>";
                echo "	  <th width='15%'>Nome</th>";
				echo "	  <th width='15%'>Marca</th>";
                echo "    <th width='10%'>Quantidade</th>";
                echo "    <th width='10%'>Tipo de produto</th>";
				echo "	  <th width='10%'>Preco </th>";
				echo "	  <th width='5%'> </th>";
                echo "    <th width='5%'> </th>";
                echo "    <th width='5%'> </th>";
                echo "    <th width='5%'> </th>";
                echo "	</tr>";

                echo '<form method="POST" action="estoqueListarPesquisa.php">
                <input type="text" name="pesquisar" style="width:90%" placeholder="Digite o Nome, Modelo ou Tipo do Produto que deseja encontrar">
                    <input style="width:10%" type="submit" name="buscar" value="Buscar">
                </form>';

                if (mysqli_num_rows($result) > 0) {

                        // Apresenta cada linha da tabel
                        while ($row = mysqli_fetch_assoc($result)) {
                            $cod = $row["id"];
                            echo "<tr>";
                            echo "<td>";
                            echo $cod;
                            echo "</td><td>";
                            echo $row["nome"];
                            echo "</td><td>";
                            echo $row["marca"];
                            echo "</td><td>";
                            echo $row["quantidade"];
                            echo "</td><td>";
                            echo $row["tipo"];
                            echo "</td><td>";
                            echo $row["preco"];
                            echo "</td><td>";
                        

						//Adicionar, retirar ou excluir registro do produto
				?>
                        <a href='estoqueSaida.php?id=<?php echo $cod; ?>'><img src='../imagens/saida.png' title='Registrar Saida de Produto' width='32'></a>
                        </td>
                        <td>
                        <a href='estoqueEntrada.php?id=<?php echo $cod; ?>'><img src='../imagens/entrada.png' title='Registrar Entrada de Produto' width='32'></a>
                        </td>
                        <td>
                        <a href='estoqueEditar.php?id=<?php echo $cod; ?>'><img src='../imagens/editar.png' title='Editar Produto' width='25'></a>
                        </td>
                        <td>
                        <a href='estoqueExcluir.php?id=<?php echo $cod; ?>'><img src='../imagens/deletar.png' title='Excluir Produto' width='30'></a>
                        </td>
                        </tr>
				 <?php
                    }
                }
                echo "</table>";
                echo "</div>";
            } else {
                echo "Erro executando SELECT: " . mysqli_error($conn);
            }

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
