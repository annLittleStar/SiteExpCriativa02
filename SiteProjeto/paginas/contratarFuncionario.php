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
<body onload="w3_show_nav('menuFuncionario')">

<!-- Inclui MENU.PHP  -->
<?php require 'menu.php';?>

<!-- Conteúdo Principal: deslocado paa direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xxlarge">Cadastrar Funcionário</h1>

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
                
                echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
                ?>              
                    <div class="w3-container w3-theme">
                        <h2>Informe os dados da Venda</h2>
                    </div>
                    <form class="w3-container" action="contratarFuncionarioBD.php" method="post" onsubmit="return check(this.form)">
						<input type="hidden" id="acaoForm" name="acaoForm" value="Cada">
                        <p>
                        <label class="w3-text-deep-purple"><b>Nome</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="nome" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{4,100}$" title="Nome do Funcionário." required></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>CPF</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="cpf" type="text" pattern="[0-9]{11}" title="CPF do Funcionário." required></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Telefone</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="tel" type="text" pattern="[0-9]{9}" title="Telefone Funcionario." required></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Cargo</b></label>
                        <br>
                        <p>
                        <select class='w3-input w3-border w3-light-grey' name='cargo' title="Cargo do Funcionário" style='width:40%; height:4.5%; padding:0%; padding-left:8px'>
                            <option value="Dono">Dono</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Lavador">Lavador</option>
                        </select>
                        </p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Nome de Usuario</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="user" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$" title="Usuario." required></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Senha</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="pass" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$" title="Senha." required></p>
                        <p>
						<input type="submit" value="Contratar" class="w3-btn w3-green" >
						<input type="button" value="Cancelar" class="w3-btn w3-red" onclick="window.location.href='contratarFuncionario.php'"></p>
					</form>
			</div>
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
