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
            <h1 class="w3-xxlarge">Registrar Chegada de Pneu Defeituoso</h1>

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
                    $sql = "SELECT idProd, nomeProd, qtdA FROM produto INNER JOIN pneuDef 
                    WHERE idProd = $id AND idPneuDef = $id";
                echo "<div class='w3-responsive w3-card-4'>"; //Inicio form
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {


                        // Apresenta cada linha da tabela:
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>              
                            <div class="w3-container w3-theme">
                                <h2>Insira a quantidade de Pneu Defeituosos encontrados. = [<?php echo $row['idProd']; ?>]</h2>
                            </div>
                            <form class="w3-container" action="entradaPneuDefBD.php" method="post" onsubmit="return check(this.form)">
                                <input type="hidden" id="Id" name="Id" value="<?php echo $row['idProd']; ?>">
                                <p>
                                    <label class="w3-text-deep-purple"><b>Nome</b></label>
                                    <input class="w3-input w3-border w3-light-grey" name="Nome" type="text" pattern="[a-zA-Z0-9\u00C0-\u00FF ]{4,100}$"
                                    title="Nome do produto." value="<?php echo $row['nomeProd']; ?>" required readonly></p>
                                    <p>
                                        <label class="w3-text-deep-purple"><b>Quantidade aguardando recolhimento</b></label>
                                        <input class="w3-input w3-border w3-light-grey" name="Quantidade" type="text" pattern="[0-9]{1,3}"
                                        title="Quantidade de itens." value="<?php echo $row['qtdA']; ?>" required readonly></p>
                                        <p>
                                            <label class="w3-text-deep-purple"><b>Quantidade de pneus defeituosos encontrados</b></label>
                                            <input class="w3-input w3-border w3-light-grey" name="Entrando" type="text" pattern="[0-9]{1,3}"
                                            title="Quantidade a ser removida." value="" required></p>
                                            <p>
                                                <input type="submit" value="Registrar" class="w3-btn w3-theme" >
                                                <input type="button" value="Cancelar" class="w3-btn w3-red" onclick="window.location.href='estoqueListar.php'"></p>
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
