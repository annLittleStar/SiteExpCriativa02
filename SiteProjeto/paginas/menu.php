<!-------------------------------------------------------------------------------
PROJETO DE EXPERIÊNCIA CRIATIVA 02:
SEA+
PUCPR
ENGENHARIA DE SOFTWARE

Equipe: Ana Schran, Gabriel Barboza, Lohan Akim e Victor Negrelli
---------------------------------------------------------------------------------->
	<!-- Top -->
	<div class="w3-top">

		<div class="w3-row w3-white w3-padding">

			<div class="w3-half" style="margin:4px 0 6px 0">
				<a href="."><img src='..\imagens/logotest.png' alt='SEA+' width="89px" height="32px"></a>
			</div>

			<div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small">
				<div class="w3-right"><a href="../entrar.php"><img src="../imagens/sair.png" width="25" height="25" href="../entrar.php"></div>
			</div>
		</div>
		<div class="w3-bar w3-theme w3-large" style="z-index:4;">
			<a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-blue w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-blue w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuFuncionario')">FUNCIONARIOS</a>
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-blue w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuEstoque')">ESTOQUE</a>
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-blue w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuServicos')">SERVIÇOS</a>
		</div>
	</div>

	<!-- Sidebar -->
	<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar">
		<div class="w3-bar w3-hide-large w3-large">
			<a href="javascript:void(0)" onclick="w3_show_nav('menuFuncionario')"
			class="w3-bar-item w3-button w3-theme w3-hover-blue w3-padding-16" style="width:50%">Funcionarios</a>
			<a href="javascript:void(0)" onclick="w3_show_nav('menuEstoque')"
			class="w3-bar-item w3-button w3-theme w3-hover-blue w3-padding-16" style="width:50%">Estoque</a>
			<a href="javascript:void(0)" onclick="w3_show_nav('menuServicos')"
			class="w3-bar-item w3-button w3-theme w3-hover-blue w3-padding-16" style="width:50%">Serviços</a>
		</div>
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large"
		   title="Close Menu">×</a>
		<div id="menuFuncionario" class="myMenu">
			<div class="w3-container">
				<h3>Funcionários</h3>
			</div>
			<a class="w3-bar-item w3-button" href="emDesenvolvimento.php">Relação de Funcionários</a>
			<a class="w3-bar-item w3-button" href="emDesenvolvimento.php">Contratação</a>
			<a class="w3-bar-item w3-button" href="emDesenvolvimento.php">Demissao</a>
		</div>
		<div id="menuEstoque" class="myMenu" >
			<div class="w3-container">
				<h3>Controle de Estoque</h3>
			</div>
			<a class="w3-bar-item w3-button" href='estoqueListar.php'>Pneus em Estoque</a>
			<a class="w3-bar-item w3-button" href='estoqueListarPneu.php'>Seleção de Pneus Recomendados</a>
			<a class="w3-bar-item w3-button" href='registroPneuDef.php'>Registro de Pneus Defeituosos</a>
			<a class="w3-bar-item w3-button" href='cadastrarprod.php'>Cadastrar Novo Pneu</a>
			<a class="w3-bar-item w3-button" href='prodlavagem.php'>Produtos de Lavagem</a>
		</div>
		<div id="menuServicos" class="myMenu" >
			<div class="w3-container">
				<h3>Serviços</h3>
			</div>
			<a class="w3-bar-item w3-button" href="vendasListarPneu.php">Registrar Vendas</a>
			<a class="w3-bar-item w3-button" href="vendasListar.php">Histórico de Vendas</a>
			<a class="w3-bar-item w3-button" href="lavagensSelecionar.php">Registrar Lavagens</a>
			<a class="w3-bar-item w3-button" href="lavagensListar.php">Histórico de Lavagens</a>
		</div>
	</div>
