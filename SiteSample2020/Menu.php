
<div class="w3-top">
	<div class="w3-row w3-white w3-padding">
		<div class="w3-half" style="margin:4px 0 6px 0"><a href="."><img src='imagens/logotest.png' alt=' IE Exemplo '></a>
		</div>
		<div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small">
			<div class="w3-right">AKIM PNEUS</div>
		</div>
	</div>
	<div class="w3-bar w3-theme w3-large" style="z-index:4;">
		<a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuProf')">ESTOQUE</a>
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuDisc')">FUNCIONARIOS</a>
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuTurma')">SERVICOS</a>
	</div>
</div>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar">
	<div class="w3-bar w3-hide-large w3-large">
		<a href="javascript:void(0)" onclick="w3_show_nav('menuProf')"
		class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">Estoque</a>
		<a href="javascript:void(0)" onclick="w3_show_nav('menuDisc')"
		class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">Funcionarios</a>
		<a href="javascript:void(0)" onclick="w3_show_nav('menuTurma')"
		class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">Servicos</a>
	</div>
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large"
	title="Close Menu">×</a>
	<div id="menuProf" class="myMenu">
		<div class="w3-container">
			<h3>Estoque</h3>
		</div>
		<a class="w3-bar-item w3-button" href="profListar.php">Relação do Estoque</a>
		<a class="w3-bar-item w3-button" href="profContratar.php">Cadastro de Produtos</a>


	</div>
	<div id="menuDisc" class="myMenu" >
		<div class="w3-container">
			<h3>Funcionarios</h3>
		</div>
		<a class="w3-bar-item w3-button" href='discListar.php'>Relação de Funcionarios</a>
		<a class="w3-bar-item w3-button" href='discContratar.php'>Cadastrar Funcionario</a>

	</div>
	<div id="menuTurma" class="myMenu" >
		<div class="w3-container">
			<h3>Servicos</h3>
		</div>
		<a class="w3-bar-item w3-button" href='turmaListar.php'>Relação de Servicos</a>
		<a class="w3-bar-item w3-button" href='turmaContratar.php'>Registrar Servico</a>

	</div>
</div>




