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
            font-max-size: 8px
        }
    </style>

</head>
<body  onload="w3_show_nav('menuProf')">
    <!-- Inclui MENU.PHP  -->
    <?php require 'menu.php';?>

    <!-- Conteúdo Principal: deslocado paa direita em 270 pixels quando a sidebar é visível -->
    <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xlarge">Registro de Entrada de Produtos</h1>

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
                            <h2>Informe os dados do Produto</h2>
                        </div>
                        <form class="w3-container" action="ProfContratar_exe.php" method="post" onsubmit="return check(this.form)">
                          <input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">
                          <p>
                              <label class="w3-text-deep-purple"><b>Nome</b></label>
                              <input class="w3-input w3-border w3-light-grey" name="Nome" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{10,100}$"
                              title="Nome entre 10 e 100 letras." required></p>
                              <p>
                                  <label class="w3-text-deep-purple"><b>ID</b></label>
                                  <input class="w3-input w3-border w3-light-grey " name="Celular" type="text"
                                  pattern="\([0-9]{8}\)$" title="11111111." required></p>
                                  <p>
                                      <label class="w3-text-deep-purple"><b>Data de Fabricacao</b></label>
                                      <input class="w3-input w3-border w3-light-grey" name="DataNasc" type="date"
                                      pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])"
                                      title="Formato: dd/mm/aaaa."></p>
                                      <p>
                                          <label class="w3-text-deep-purple"><b>Data de Compra</b></label>
                                          <input class="w3-input w3-border w3-light-grey" name="Login" type="date"
                                          pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])"
                                          title="Formato: dd/mm/aaaa."></p>
                                          <p>
                                              <label class="w3-text-deep-purple"><b>Marca</b></label>
                                              <input class="w3-input w3-border w3-light-grey" name="Senha" type="password"
                                              title="Marca do produto" required></p>
                                              <p>
                                                  <label class="w3-text-deep-purple"><b>Quantidade</b></label>
                                                  <input class="w3-input w3-border w3-light-grey" name="Senha2" type="password"
                                                  pattern="\([0-9]{5}\)$" title="Quantidade de produtos" required></p>

                                                  <p>
                                                      <input type="submit" value="Registrar" class="w3-btn w3-theme" >
                                                      <input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='.'"></p>
                                                  </form>
                                              </div>

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
