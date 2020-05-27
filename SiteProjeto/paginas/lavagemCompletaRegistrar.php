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
        <h1 class="w3-xxlarge">Formulário de Registro de Lavagem</h1>

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

                <div class="w3-responsive w3-card-4">
                    <div class="w3-container w3-theme">
                        <h2>Informe os dados da Lavagem Realizada</h2>
                    </div>
                    <form class="w3-container" action="lavagemCompletaBD.php" method="post" onsubmit="return check(this.form)">
						<input type="hidden" id="acaoForm" name="acaoForm" value="Cada">
                        <p>
                        <label class="w3-text-deep-purple"><b>Id Lavagem</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="lavC" type="text" pattern="[0-9]{1,3}" title="ID do Produto." required></p>
                        <p>
                        <!-- <label class="w3-text-deep-purple"><b>Data</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="dataC" type="date" title="Data de inicio do registro."></p> 
                        <p>
                        <label class="w3-text-deep-purple"><b>Horário</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="hrC" type="text" title="Data de inicio do registro."></p> -->
                        <label class="w3-text-deep-purple"><b>Data e Horário</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="dataHorario" type="text" value="<?php $dataB = date("Y/m/d H:i:s", time()); echo "$dataB" ?>" title="Data e Horario de inicio do registro." required readonly></p>
                        <p>
                        <label class="w3-text-deep-purple"><b>Valor em reais</b></label>
                        <input class="w3-input w3-border w3-light-grey" name="valC" type="text"  title="Tipo de Lavagem: Preço da Lavagem Completa." value="30.00" pattern="[0-9]{4,2}" required readonly></p>

                        <p>
						<input type="submit" value="Cadastrar" class="w3-btn w3-green" >
						<input type="button" value="Cancelar" class="w3-btn w3-red" onclick="window.location.href='lavagensSelecionar.php'"></p>
					</form>
				</div>

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