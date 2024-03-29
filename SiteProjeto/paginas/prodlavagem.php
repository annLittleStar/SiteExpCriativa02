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
            <h1 class="w3-xxlarge">Produtos de Lavagem</h1>
            <table style="height: :100%; width:100%;">
                <tr>
                    <td style="width:30%; text-align:center">
                        <label class="w3-text-deep-purple"><b>Pneu Pretinho</b></label> <br>
                    </td>
                    <td style="width:30%; text-align:center">
                        <label class="w3-text-deep-purple"><b>Shampoo Automotivo</b></label>
                    </td>
                    <td style="width:30%; text-align:center">
                        <label class="w3-text-deep-purple"><b>Silicone em Spray</b></label>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%; text-align:center">
                     <a href="https://www.americanas.com.br/busca/pretinho-pneu" ><img src="../imagens/pretinho.png" class="w3-circle"  width="45%" height="5%"></a>
                 </td>
                 <td style="width:30%; text-align:center">
                     <a href="https://www.americanas.com.br/busca/shampoo-automotivo"><img src="../imagens/shampoo.jpg" class="w3-circle"  width="45%" height="12%"></a>
                 </td>
                 <td style="width:30%; text-align:center">
                     <a href="https://www.americanas.com.br/busca/silicone-spray"><img src="../imagens/silicone.jpg"  class="w3-circle"  width="45%" height="55%"></a>
                 </td>
             </tr>
         </table>
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