<!DOCTYPE html>
<!--
Desenvolvimento Web
PUCPR
SEA+
Abril/2020
-->
<html>
<head>
     <title>AKIM PNEUS</title>
    <link rel="icon" type="image/png" href="imagens/IE_favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-theme {
            color: #ffff !important;
            background-color: lightblue !important
        }

        .w3-code {
            border-left: 4px solid lightblue
        }

        .myMenu {
            margin-bottom: 150px
        }

        .myFont {
            font-size: 8px
        }
    </style>

</head>
<body  onload="w3_show_nav('menuProf')">
    <!-- Inclui MENU.PHP  -->
    <?php require 'menu.php'; ?>

    <!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
    <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xxlarge">Relação do Estoque</h1>

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
                        $servername = "localhost:3307";
                        $username = "root";
                        $password = "";
                        $database = "IE_Exemplo";

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
                        $sql = "SELECT CodProfessor, Nome, Celular, DataNasc, Login FROM professor";
                        echo "<div class='w3-responsive w3-card-4'>";
                        if ($result = mysqli_query($conn, $sql)) {
                            echo "<table class='w3-table-all'>";
                            echo "	<tr>";
                            echo "	  <th>Código</th>";
                            echo "	  <th>Nome</th>";
                            echo "	  <th>Celular</th>";
                            echo "	  <th>Data Nascimento</th>";
                            echo "	  <th>Login</th>";
                            echo "	  <th> </th>";
                            echo "	  <th> </th>";
                            echo "	</tr>";
                            if (mysqli_num_rows($result) > 0) {
                            // Apresenta cada linha da tabela
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $dataN = explode('-', $row["DataNasc"]);
                                    $ano = $dataN[0];
                                    $mes = $dataN[1];
                                    $dia = $dataN[2];
                                    $cod = $row["CodProfessor"];
                                    $nova_data = $dia . '/' . $mes . '/' . $ano;
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $cod;
                                    echo "</td><td>";
                                    echo $row["Nome"];
                                    echo "</td><td>";
                                    echo $row["Celular"];
                                    echo "</td><td>";
                                    echo $nova_data;
                                    echo "</td><td>";
                                    echo $row["Login"];
                                    echo "</td><td>";
                                //Atualizar e Excluir registro de prof
                                    ?>

                                    <a href='profAtualizar.php?id=<?php echo $cod; ?>'><img src='imagens/Edit.png' title='Editar Professor' width='32'></a>
                                </td><td>
                                    <a href='profExcluir.php?id=<?php echo $cod; ?>'><img src='imagens/Delete.png' title='Excluir Professor' width='32'></a>
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

                mysqli_close($conn);

                ?>
            </div>
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
